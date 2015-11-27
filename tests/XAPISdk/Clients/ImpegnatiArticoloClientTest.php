<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class ImpegnatiArticoloClientClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\ImpegnatiArticoloClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\ImpegnatoArticolo::CLASS_NAME);
    }

    public function test_ImpegnatiArticoloCount_shouldReturnNumber() {
        $impegnatiArticoloCount = $this->_client->count();
        $this->assertTrue(is_int($impegnatiArticoloCount));
        return $impegnatiArticoloCount;
    }

    /**
     * @depends test_ImpegnatiArticoloCount_shouldReturnNumber
     */
    public function test_listAllImpegnatiArticoloElements_shouldCountEqualImpegnatiArticoloCount($impegnatiArticoloCount) {
        $impegnatiArticoloList = $this->_client->listAll();
        $this->assertCount($impegnatiArticoloCount,$impegnatiArticoloList);
    }
}
