<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class CategoriaMerceologicaClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\CategorieMerceologicaClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\CategoriaMerceologica::CLASS_NAME);
    }

    public function test_addingCategoriaMerceologica_shouldReturnObjectWithSameProperties() {
        $categoriaToAdd = new \XAPISdk\Data\BusinessObjects\CategoriaMerceologica();
        $categoriaToAdd->setNome('Category 01');

        $categoriaAdded = $this->_client->add($categoriaToAdd);

        $this->assertEquals($categoriaToAdd->getNome(), $categoriaAdded->getNome());

        return $categoriaAdded;
    }

    /**
     * @depends test_addingCategoriaMerceologica_shouldReturnObjectWithSameProperties
     */
    public function test_gettingCategoriaMerceologica_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\CategoriaMerceologica $categoriaAdded) {
        $categoriaGetted = $this->_client->get($categoriaAdded->getId());

        $this->assertEquals($categoriaAdded->getNome(), $categoriaGetted->getNome());

        return $categoriaGetted;
    }

    /**
     * @depends test_gettingCategoriaMerceologica_shouldReturnObjectWithSameProperties
     */
    public function test_listingCategorieMerceologica_shouldReturnObjectsCountAsCount() {
        $count = $this->_client->count();

        $categorieList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($categorieList));
    }

    /**
     * @depends test_gettingCategoriaMerceologica_shouldReturnObjectWithSameProperties
     */
    public function test_editingCategoriaMerceologica_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\CategoriaMerceologica $categoriaGetted) {
        $categoriaToEdit = $categoriaGetted;

        $categoriaToEdit->setNome($categoriaToEdit->getNome() . '_1');

        $categoriaEdited = $this->_client->update($categoriaToEdit);

        $this->assertEquals($categoriaToEdit->getNome(), $categoriaEdited->getNome());

        return $categoriaEdited;
    }

    /**
     * @depends test_editingCategoriaMerceologica_shouldReturnObjectWithSameProperties
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_deletingCategoriaMerceologica_shouldNotBeFound(\XAPISdk\Data\BusinessObjects\CategoriaMerceologica $categoriaEdited) {
        $this->_client->delete($categoriaEdited->getId());

        $this->_client->get($categoriaEdited->getId());
    }

    /**
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_gettingCategoriaMerceologicaWithWrongId_shouldThrowException() {
        $categoria = $this->_client->get('YOU_CANNOT_FIND_ME');
    }
}
