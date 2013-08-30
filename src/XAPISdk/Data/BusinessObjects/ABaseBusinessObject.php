<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

use XAPISdk\Clients\ClientFactory;
use XAPISdk\Clients\IXAPIClient;

abstract class ABaseBusinessObject implements IBusinessObject {

    // region -- CONSTANTS --

    const DATE_TIME_FORMAT = \DateTime::ISO8601;
    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_id;
    protected $_dataCreazione;
    protected $_dataUltimaModifica;
    protected $_href;

    protected $_xapiClient;

    /**
     * If lazy this resource hasn't been completly loaded from XAPI.
     * @var
     */
    protected $_lazy;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setHref($href) {
        $this->_href = $href;
    }

    public function getHref() {
        return $this->_href;
    }

    public function setDataCreazione($dataCreazione) {
        $this->_dataCreazione = $dataCreazione;
    }

    public function getDataCreazione() {
        return $this->_dataCreazione;
    }

    public function setDataUltimaModifica($dataUltimaModifica) {
        $this->_dataUltimaModifica = $dataUltimaModifica;
    }

    public function getDataUltimaModifica() {
        return $this->_dataUltimaModifica;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    public function getId() {
        return $this->_id;
    }

    public function setLazy($lazy) {
        $this->_lazy = $lazy;
    }

    /**
     * If lazy this resource hasn't been completly loaded from XAPI.
     * @return mixed
     */
    public function getLazy() {
        return $this->_lazy;
    }

    public function getXapiClient() {
        return $this->_xapiClient;
    }

    // endregion

    // region -- METHODS --

    public function __construct(IXAPIClient $client = null) {
        $this->_xapiClient = $client;
    }

    protected function setCommonFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->id) && !empty($jsonObj->id))
            $this->setId($jsonObj->id);

        if (isset($jsonObj->dataCreazione) && !empty($jsonObj->dataCreazione))
            $this->setDataCreazione($this->parseDate($jsonObj->dataCreazione));

        if (isset($jsonObj->dataUltimaModifica) && !empty($jsonObj->dataUltimaModifica))
            $this->setDataUltimaModifica($this->parseDate($jsonObj->dataUltimaModifica));

        if (isset($jsonObj->href) && !empty($jsonObj->href))
            $this->setHref($jsonObj->href);

        if (isset($jsonObj->lazy))
            $this->setLazy($jsonObj->lazy);
    }

    /**
     * WARNING: this method only check for property id to be set !!!
     * Query XAPI if you want to be sure that this business object is already in MX
     * @return bool
     */
    public function isInMx() {
        return !empty($this->_id);
    }

    protected function parseDate($value) {
        return \DateTime::createFromFormat(self::DATE_TIME_FORMAT, $value);
    }

    protected function formatDate(\DateTime $date) {
        return $date->format(self::DATE_TIME_FORMAT);
    }

    public static function fromJson($jsonObj, IXAPIClient $client = null) {
        $selfClassName = get_called_class();
        $res = new $selfClassName($client);

        $res->setCommonFieldsFromJsonObj($jsonObj);
        $res->setFieldsFromJsonObj($jsonObj);

        return $res;
    }

    protected abstract function setFieldsFromJsonObj($jsonObj);

    protected function retriveDataFromXAPI() {
        $xapiConf = $this->_xapiClient->getXapiSdkConfiguration();
        $factory = new ClientFactory($xapiConf);
        $client = $factory->getClientForBusinessObject(get_called_class());

        $jsonObj = $client->getAsJsonObj($this->getId());

        $this->setFieldsFromJsonObj($jsonObj);
        $this->setLazy(false);
    }

    public static function getClassName() {
        return self::CLASS_NAME;
    }

    protected function delazyField($fieldValue) {
        if ($this->_xapiClient == null)
            return;

        if ($fieldValue instanceof ABaseBusinessObject) {
            return $this->delazyFieldSingle($fieldValue);
        }

        if (is_array($fieldValue)) {
            return $this->delazyFieldCollection($fieldValue);
        }
    }

    private function delazyFieldSingle(ABaseBusinessObject $fieldValue) {
        if ($fieldValue->_lazy)
            $fieldValue->retriveDataFromXAPI();

        return $fieldValue;
    }

    private function delazyFieldCollection(array $fieldValue) {
        for($i = 0; $i < sizeof($fieldValue); $i++) {
            $fieldValue[$i] = $this->delazyField($fieldValue[$i]);
        }

        return $fieldValue;
    }

    protected function serializedField($fieldValue) {
        if ($fieldValue instanceof IBusinessObject)
            return $fieldValue->getId();

        if ($fieldValue instanceof \DateTime)
            return $this->formatDate($fieldValue);

        return $fieldValue;
    }

    // endregion

}