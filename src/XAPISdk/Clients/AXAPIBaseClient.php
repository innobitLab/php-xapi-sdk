<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Clients;

use Httpful\Request;
use XAPISdk\Configuration\XAPISdkConfiguration;
use XAPISdk\Data\BusinessObjects\IBusinessObject;
use XAPISdk\Net\HttpCodes;
use XAPISdk\Security\SecurityManager;
use XAPISdk\Util\StringUtil;

abstract class AXAPIBaseClient implements IXAPIClient {

    // region -- CONSTANTS --

    const HEADER_NAME__APIKEY    = 'X_APIKEY';
    const HEADER_NAME__TIMESTAMP = 'X_TIMESTAMP';
    const HEADER_NAME__SIGNATURE = 'X_SIGNATURE';

    const PARAM_QUERY__NAME = 'q';
    const PARAM_QUERY__FIELD_SEP = '|';
    const PARAM_QUERY__FILTER_SEP = ',';

    const PARAM_OFFSET__NAME = 'offset';
    const PARAM_LIMIT__NAME = 'limit';
    const PARAM_LIMIT__MAX_VALUE = 100;

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_xapiSdkConf;

    // endregion

    // region -- GETTERS/SETTERS --

    public function getXapiSdkConfiguration() {
        return $this->_xapiSdkConf;
    }

    // endregion

    // region -- METHODS --

    public function __construct(XAPISdkConfiguration $conf) {
        $this->_xapiSdkConf = $conf;
    }

    protected abstract function getResourceName();

    protected abstract function getBusinessObjectClassName();

    public function loadAsProxy($id) {
        $businessObjClassName = $this->getBusinessObjectClassName();

        /** @var \XAPISdk\Data\BusinessObjects\IBusinessObject $res */
        $res = new $businessObjClassName($this);

        $res->setId($id);
        $res->setLazy(true);

        return $res;
    }

    public function get($id) {
        $jsonObj = $this->getAsJsonObj($id);

        $businessObjClassName = $this->getBusinessObjectClassName();

        return $businessObjClassName::fromJson($jsonObj, $this);
    }

    public function getAsJsonObj($id) {
        $this->logDebug('Called get on resource [' . $this->getResourceName() . ']');

        /** @var \Httpful\Request $request */
        $request = $this->createGetRequestJson($this->getResourceName(), $id);

        $this->logDebug('Request created');

        /** @var \Httpful\Response $response */
        $response = $request->send();

        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code == HttpCodes::NOTFOUND) {
            $e = new ResourceNotFoundException('resource [' . $this->getResourceName() . '] with id [' . $id . '] not found, xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to get resource', $e);
            throw $e;
        }

        if ($response->code != HttpCodes::OK) {
            $e = new ClientException('Cannot get resource [' . $this->getResourceName() . '] with id [' . $id . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to get resource', $e);
            throw $e;
        }

        if (is_array($response->body))
            return $response->body[0];

        return $response->body;
    }

    public function update(IBusinessObject $obj) {
        $this->logDebug('Called update on resource [' . $this->getResourceName() . ']');

        $request = $this->createPutRequestJson($this->getResourceName(), $obj->getId(), $obj->toJson());

        $this->logDebug('Request created');

        $response = $request->send();

        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code != HttpCodes::OK) {
            $e = new ClientException('Cannot add resource [' . $this->getResourceName() . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to add resource', $e);
            throw $e;
        }

        $businessObjClassName = $this->getBusinessObjectClassName();

        return $businessObjClassName::fromJson($response->body, $this);
    }

    public function add(IBusinessObject $obj) {
        $this->logDebug('Called add on resource [' . $this->getResourceName() . ']');

        $request = $this->createPostRequestJson($this->getResourceName(), $obj->toJson());

        $this->logDebug('Request created');

        $response = $request->send();

        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code != HttpCodes::CREATED) {
            $e = new ClientException('Cannot add resource [' . $this->getResourceName() . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to add resource', $e);
            throw $e;
        }

        $businessObjClassName = $this->getBusinessObjectClassName();

        return $businessObjClassName::fromJson($response->body, $this);
    }

    public function delete($id) {
        $this->logDebug('Called delete on resource [' . $this->getResourceName() . ']');

        $request = $this->createDeleteRequestJson($this->getResourceName(), $id);

        $this->logDebug('Request created');

        $response = $request->send();

        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code != HttpCodes::NOCONTENT) {
            $e = new ClientException('Cannot delete resource [' . $this->getResourceName() . '] with id [' . $id . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to delete resource', $e);
            throw $e;
        }
    }

    public function count() {
        $this->logDebug('Called count on resource [' . $this->getResourceName() . ']');

        $request = $this->createGetRequestJson($this->getResourceName(), 'count');
        $this->logDebug('Request created');

        $response = $request->send();
        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code != HttpCodes::OK) {
            $e = new ClientException('Cannot count resource[' . $this->getResourceName() . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error during count', $e);
            throw $e;
        }

        $count = $response->body->count;

        return $count;
    }

    public function listAll(array $kvpFilter = null) {
        $this->logDebug('Called listAll on resource [' . $this->getResourceName() . ']');

        $count = $this->count();

        $res = array();
        $from = 0;

        do {
            $tmpRes = $this->listFromLimit($kvpFilter, $from, self::PARAM_LIMIT__MAX_VALUE);
            $res = array_merge($res, $tmpRes);

            $from += self::PARAM_LIMIT__MAX_VALUE;
        } while ($from < $count);

        return $res;
    }

    protected function listFromLimit(array $kvpFilter = null, $from = 0, $limit = self::PARAM_LIMIT__MAX_VALUE) {
        $this->logDebug('Called listFromLimit on resource [' . $this->getResourceName() . ']');

        $params = array();

        if (!empty($kvpFilter)) {
            $params[self::PARAM_QUERY__NAME] = $this->calculateQueryParamForKvpFilter($kvpFilter);
        }

        $params[self::PARAM_OFFSET__NAME] = $from;
        $params[self::PARAM_LIMIT__NAME] = $limit;

        $request = $this->createGetRequestJson($this->getResourceName(), null, $params);

        $this->logDebug('Request created');

        $response = $request->send();

        $this->logDebug('Request sent, response [' . $response->__toString() . ']');

        if ($response->code != HttpCodes::OK) {
            $e = new ClientException('Cannot list resource[' . $this->getResourceName() . '], xapi response [' . $response->__toString() . ']');
            $this->logError('Error trying to list resource', $e);
            throw $e;
        }

        $res = array();
        $businessObjClassName = $this->getBusinessObjectClassName();

        foreach($response->body as $obj) {
            $res[] = $businessObjClassName::fromJson($obj, $this);
        }

        return $res;
    }

    protected function createPostRequestJson($resourceName, $jsonPostData) {
        $resourcePath = $this->calculateResourcePath($resourceName);
        $uri = $this->calculateUriForResourcePath($resourcePath);

        $request = Request::post($uri);

        $this->addAuthenticationHeadersToRequest($request, $resourcePath);

        $request->sendsJson()->body($jsonPostData);

        return $request;
    }

    protected function createPutRequestJson($resourceName, $resourceId, $jsonPostData) {
        $resourcePath = $this->calculateResourcePath($resourceName, $resourceId);
        $uri = $this->calculateUriForResourcePath($resourcePath);

        $request = Request::put($uri);

        $this->addAuthenticationHeadersToRequest($request, $resourcePath);

        $request->sendsJson()->body($jsonPostData);

        return $request;
    }

    protected function createGetRequestJson($resourceName, $resourceId = null, array $params = array()) {
        $resourcePath = $this->calculateResourcePath($resourceName, $resourceId);
        $uri = $this->calculateUriForResourcePath($resourcePath, $params);

        $getRequest = Request::get($uri);

        $this->addAuthenticationHeadersToRequest($getRequest, $resourcePath);

        $getRequest->expectsJson();

        return $getRequest;
    }

    protected function createDeleteRequestJson($resourceName, $resourceId) {
        $resourcePath = $this->calculateResourcePath($resourceName, $resourceId);
        $uri = $this->calculateUriForResourcePath($resourcePath);

        /** @var \Httpful\Request $getRequest  */
        $getRequest = Request::delete($uri);

        $getRequest->autoParse(false);

        $this->addAuthenticationHeadersToRequest($getRequest, $resourcePath);

        return $getRequest;
    }

    protected function addAuthenticationHeadersToRequest(\Httpful\Request &$request, $resourcePath) {
        $sm = new SecurityManager();

        $timestamp = new \DateTime();
        $timestamp = $timestamp->format('YmdHis');

        $xapiPublicKey = $this->_xapiSdkConf->getXapiPublicKey();
        $xapiPrivateKey = $this->_xapiSdkConf->getXapiPrivateKey();

        $hashSignature = $sm->calculateSignatureForRequest($resourcePath,
            $xapiPublicKey,
            $xapiPrivateKey,
            $timestamp);

        $request->addHeader(self::HEADER_NAME__APIKEY, $xapiPublicKey);
        $request->addHeader(self::HEADER_NAME__TIMESTAMP, $timestamp);
        $request->addHeader(self::HEADER_NAME__SIGNATURE, $hashSignature);
    }

    protected function calculateUriForResourcePath($resourcePath, array $params = array()) {
        $glue = '';

        $xapiUri = $this->_xapiSdkConf->getXapiUri();

        if (!StringUtil::endsWith($xapiUri, '/'))
            $glue = '/';

        $uri = $xapiUri . $glue . $resourcePath;

        $sep = '?';

        foreach($params as $pKey => $pValue) {
            $uri .= $sep . urlencode($pKey) . '=' . urlencode($pValue);
            $sep = '&';
        }

        return $uri;
    }

    protected function calculateQueryParamForKvpFilter(array $kvpFilter) {
        $res = '';
        $sep = '';

        foreach($kvpFilter as $k => $v) {
            $k = StringUtil::escapeCharInString($k, self::PARAM_QUERY__FIELD_SEP);
            $k = StringUtil::escapeCharInString($k, self::PARAM_QUERY__FILTER_SEP);

            $v = urlencode($v);
            $v = StringUtil::escapeCharInString($v, self::PARAM_QUERY__FIELD_SEP);
            $v = StringUtil::escapeCharInString($v, self::PARAM_QUERY__FILTER_SEP);

            $res .= $sep . $k . self::PARAM_QUERY__FIELD_SEP . $v;
            $sep = self::PARAM_QUERY__FILTER_SEP;
        }

        return $res;
    }

    protected function calculateResourcePath($resourceName, $resourceId = null) {
        $res = $resourceName;

        if ($resourceId != null)
            $res .= '/' . $resourceId;

        return $res;
    }

    protected function logDebug($message) {
        if (!$this->isLogEnabled())
            return;

        $logger = $this->_xapiSdkConf->getLogger();

        $logger->debug($message);
    }

    protected function logInfo($message) {
        if (!$this->isLogEnabled())
            return;

        $logger = $this->_xapiSdkConf->getLogger();

        $logger->info($message);
    }

    protected function logError($message, \Exception $e) {
        if (!$this->isLogEnabled())
            return;

        $logger = $this->_xapiSdkConf->getLogger();

        $logger->error($message, $e);
    }

    protected function isLogEnabled() {
        return $this->_xapiSdkConf->getLogger() != null;
    }

    // endregion

}