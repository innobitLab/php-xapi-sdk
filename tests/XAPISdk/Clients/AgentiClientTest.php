<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class AgentiClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\AgentiClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Agente::CLASS_NAME);
    }

    public function test_AgentiCount_shouldReturnNumber() {
        $agentiCount = $this->_client->count();
        $this->assertTrue(is_int($agentiCount));
        return $agentiCount;
    }

    /**
     * @depends test_AgentiCount_shouldReturnNumber
     */
    public function test_listAllAgentiElements_shouldCountEqualAgentiCount($agentiCount) {
        $agentiList = $this->_client->listAll();
        $this->assertCount($agentiCount,$agentiList);
    }
}
