<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class StubClient extends \XAPISdk\Clients\AXAPIBaseClient {

    const CLASS_NAME = __CLASS__;

    public function getResourceName() {
        return 'stub';
    }

    public function getBusinessObjectClassName() {
        'Stub';
    }

    public function calculateResourcePath($resourceName, $resourceId = null) {
        return parent::calculateResourcePath($resourceName, $resourceId);
    }

    public function calculateQueryParamForKvpFilter(array $kvpFilter) {
        return parent::calculateQueryParamForKvpFilter($kvpFilter);
    }

    public function calculateUriForResourcePath($resourcePath, array $params = array()) {
        return parent::calculateUriForResourcePath($resourcePath, $params);
    }
}

class StubClientTest extends PHPUnit_Framework_TestCase {

    /** @var StubClient  */
    private $_sdkConf;

    public function setUp() {
        $this->_sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );
    }

    public function test_stubClientCanInstanciate() {
        $client = new StubClient($this->_sdkConf);

        $this->assertInstanceOf(StubClient::CLASS_NAME, $client);

        return $client;
    }

    /**
     * @depends test_stubClientCanInstanciate
     */
    public function test_calculateResourcePathWithoutId($client) {
        /** @var StubClient $resourceName */
        $resourceName = $client->getResourceName();

        $expected = $resourceName . '/';

        $this->assertEquals($expected, $client->calculateResourcePath($resourceName));
    }

    /**
     * @depends test_stubClientCanInstanciate
     */
    public function test_calculateResourcePathWithId(StubClient $client) {
        $resourceName = $client->getResourceName();
        $resourceId = 'MOAS292934838382932832982398';

        $expected = $resourceName . '/' . $resourceId;

        $this->assertEquals($expected, $client->calculateResourcePath($resourceName, $resourceId));
    }

    /**
     * @depends test_stubClientCanInstanciate
     */
    public function test_calculateQueryParamForKvpFilter(StubClient $client) {
        $kvpFiter = array('campo1' => 'valore1', 'campo2' => 10);

        $this->assertEquals('campo1|valore1,campo2|10', $client->calculateQueryParamForKvpFilter($kvpFiter));
    }

    /**
     * @depends test_stubClientCanInstanciate
     */
    public function test_calculateUriForResourcePath(StubClient $client) {
        $resourcePath = $client->calculateResourcePath('Stub');
        $params = array('q' => 'campo1|valore1', 'from' => 10, 'limit' => 100);

        $expected = Bootstrap::XAPI_URI . '/Stub/?q=campo1|valore1&from=10&limit=100';

        $this->assertEquals($expected, $client->calculateUriForResourcePath($resourcePath, $params));
    }

}
