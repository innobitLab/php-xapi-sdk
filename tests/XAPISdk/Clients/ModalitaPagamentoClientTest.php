<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class ModalitaPagamentoClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\ModalitaPagamentoClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\ModalitaPagamento::CLASS_NAME);
    }

    /**
     * @group read
     */
    public function test_listingModalitaPagamento_shouldReturnObjectsCountAsCount() {
        $count = $this->_client->count();

        $modalitaPagamentoList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($modalitaPagamentoList));
    }

}
