<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class TipiSoggettoClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\TipiSoggettoClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\TipoSoggetto::CLASS_NAME);
    }

    /**
     * @group read
     */
    public function test_listingTipiSoggetto_shouldReturnObjectsCountAsCount() {
        $count = $this->_client->count();

        $tipiSoggettoList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($tipiSoggettoList));
    }

}
