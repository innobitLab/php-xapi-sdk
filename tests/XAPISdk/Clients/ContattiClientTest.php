<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class ContattiClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\ContattiClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Contatto::CLASS_NAME);
    }

    /**
     * @group read
     */
    public function test_listingContatti_shouldReturnObjectsCountAsCount() {
        $count = $this->_client->count();

        $contattiList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($contattiList));
    }

}
