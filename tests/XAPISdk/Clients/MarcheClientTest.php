<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class MarcheClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\MarcheClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Marca::CLASS_NAME);
    }

    /**
     * @group read
     */
    public function test_listingMarche_shouldReturnObjectsCountAsCount() {
        $count = $this->_client->count();

        $marcheList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($marcheList));
    }

    /**
     * @group create
     */
    public function test_addingMarca_shouldReturnObjectWithSameProperties() {
        $marcaToAdd = new \XAPISdk\Data\BusinessObjects\Marca();
        $marcaToAdd->setNome('Apple Computers');

        $marcaAdded = $this->_client->add($marcaToAdd);

        $this->assertEquals($marcaToAdd->getNome(), $marcaAdded->getNome());

        return $marcaAdded;
    }

    /**
     * @depends test_addingMarca_shouldReturnObjectWithSameProperties
     * @group read
     */
    public function test_gettingMarca_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Marca $marcaAdded) {
        $marcaGetted = $this->_client->get($marcaAdded->getId());

        $this->assertEquals($marcaAdded->getNome(), $marcaGetted->getNome());

        return $marcaGetted;
    }

    /**
     * @depends test_gettingMarca_shouldReturnObjectWithSameProperties
     * @group update
     */
    public function test_editingMarca_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Marca $marcaGetted) {
        $marcaToEdit = $marcaGetted;

        $marcaToEdit->setNome($marcaToEdit->getNome() . '_1');

        $marcaEdited = $this->_client->update($marcaToEdit);

        $this->assertEquals($marcaToEdit->getNome(), $marcaEdited->getNome());

        return $marcaEdited;
    }

    /**
     * @depends test_editingMarca_shouldReturnObjectWithSameProperties
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     * @group delete
     */
    public function test_deletingMarca_shouldNotBeFound(\XAPISdk\Data\BusinessObjects\Marca $marcaEdited) {
        $this->_client->delete($marcaEdited->getId());

        $this->_client->get($marcaEdited->getId());
    }

    /**
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     * @group read
     */
    public function test_gettingMarcaWithWrongId_shouldThrowException() {
        $marca = $this->_client->get('YOU_CANNOT_FIND_ME');
    }
}
