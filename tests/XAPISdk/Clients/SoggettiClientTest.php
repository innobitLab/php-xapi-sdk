<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class SoggettiClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\SoggettiClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);
    }

    public function test_addingSoggetto_shouldReturnObjectWithSameProperties() {
        $soggettoToAdd = new \XAPISdk\Data\BusinessObjects\Soggetto();
        $soggettoToAdd->setRagioneSociale('Innobit, TeamMosaico');
        $soggettoToAdd->setNome('Gabriele');
        $soggettoToAdd->setCognome('Tondi');
        $soggettoToAdd->setPartitaIva('IT123456789');
        $soggettoToAdd->setCodiceFiscale('TNDGRL9237393928');
        $soggettoToAdd->setSitoWeb('http://www.innobit.it');
        $soggettoToAdd->setNote('This is a test!');
        $soggettoToAdd->setSoggettoInMora(false);

        $soggettoAdded = $this->_client->add($soggettoToAdd);

        $this->assertEquals($soggettoToAdd->getRagioneSociale(), $soggettoAdded->getRagioneSociale());
        $this->assertEquals($soggettoToAdd->getNome(), $soggettoAdded->getNome());
        $this->assertEquals($soggettoToAdd->getCognome(), $soggettoAdded->getCognome());
        $this->assertEquals($soggettoToAdd->getPartitaIva(), $soggettoAdded->getPartitaIva());
        $this->assertEquals($soggettoToAdd->getCodiceFiscale(), $soggettoAdded->getCodiceFiscale());
        $this->assertEquals($soggettoToAdd->getSitoWeb(), $soggettoAdded->getSitoWeb());
        $this->assertEquals($soggettoToAdd->getNote(), $soggettoAdded->getNote());
        $this->assertEquals($soggettoToAdd->getSoggettoInMora(), $soggettoAdded->getSoggettoInMora());

        return $soggettoAdded;
    }

    /**
     * @depends test_addingSoggetto_shouldReturnObjectWithSameProperties
     */
    public function test_listingSoggetto_escapeChar(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoAdded) {
        $soggettiByRagioneSociale = $this->_client->listAll(array('ragioneSociale' => 'Innobit, TeamMosaico'));

        $this->assertEquals(1, sizeof($soggettiByRagioneSociale));
    }

    /**
     * @depends test_addingSoggetto_shouldReturnObjectWithSameProperties
     */
    public function test_gettingSoggetto_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoAdded) {
        $soggettoGetted = $this->_client->get($soggettoAdded->getId());

        $this->assertEquals($soggettoAdded->getRagioneSociale(), $soggettoGetted->getRagioneSociale());
        $this->assertEquals($soggettoAdded->getNome(), $soggettoGetted->getNome());
        $this->assertEquals($soggettoAdded->getCognome(), $soggettoGetted->getCognome());
        $this->assertEquals($soggettoAdded->getPartitaIva(), $soggettoGetted->getPartitaIva());
        $this->assertEquals($soggettoAdded->getCodiceFiscale(), $soggettoGetted->getCodiceFiscale());
        $this->assertEquals($soggettoAdded->getSitoWeb(), $soggettoGetted->getSitoWeb());
        $this->assertEquals($soggettoAdded->getNote(), $soggettoGetted->getNote());
        $this->assertEquals($soggettoAdded->getSoggettoInMora(), $soggettoGetted->getSoggettoInMora());

        return $soggettoGetted;
    }

    /**
     * @depends test_gettingSoggetto_shouldReturnObjectWithSameProperties
     */
    public function test_listingSoggetti_shouldReturnObjectsCountAsCount($soggettoGetted) {
        $count = $this->_client->count();

        $soggettiList = $this->_client->listAll();

        $this->assertEquals($count, sizeof($soggettiList));
    }

    /**
     * @depends test_gettingSoggetto_shouldReturnObjectWithSameProperties
     */
    public function test_listingSoggettiWithFilter_shouldReturnOneObject($soggettoGetted) {

        $soggettiList = $this->_client->listAll(array('nome' => $soggettoGetted->getNome()));

        $this->assertEquals(1, sizeof($soggettiList));
    }

    /**
     * @depends test_gettingSoggetto_shouldReturnObjectWithSameProperties
     */
    public function test_editingSoggetto_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoGetted) {
        $soggettoToEdit = $soggettoGetted;

        $soggettoToEdit->setRagioneSociale($soggettoToEdit->getRagioneSociale() . '_1');
        $soggettoToEdit->setNome($soggettoToEdit->getNome() . '_1');
        $soggettoToEdit->setCognome($soggettoToEdit->getCognome() . '_1');
        $soggettoToEdit->setPartitaIva($soggettoToEdit->getPartitaIva() . '_1');
        $soggettoToEdit->setCodiceFiscale($soggettoToEdit->getCodiceFiscale() . '_1');
        $soggettoToEdit->setSitoWeb($soggettoToEdit->getSitoWeb() . '_1');
        $soggettoToEdit->setNote($soggettoToEdit->getNote() . '_1');
        $soggettoToEdit->setSoggettoInMora(true);

        $soggettoEdited = $this->_client->update($soggettoToEdit);

        $this->assertEquals($soggettoToEdit->getRagioneSociale(), $soggettoEdited->getRagioneSociale());
        $this->assertEquals($soggettoToEdit->getNome(), $soggettoEdited->getNome());
        $this->assertEquals($soggettoToEdit->getCognome(), $soggettoEdited->getCognome());
        $this->assertEquals($soggettoToEdit->getPartitaIva(), $soggettoEdited->getPartitaIva());
        $this->assertEquals($soggettoToEdit->getCodiceFiscale(), $soggettoEdited->getCodiceFiscale());
        $this->assertEquals($soggettoToEdit->getSitoWeb(), $soggettoEdited->getSitoWeb());
        $this->assertEquals($soggettoToEdit->getNote(), $soggettoEdited->getNote());
        $this->assertEquals($soggettoToEdit->getSoggettoInMora(), $soggettoEdited->getSoggettoInMora());

        return $soggettoEdited;
    }

    /**
     * @depends test_editingSoggetto_shouldReturnObjectWithSameProperties
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_deletingSoggetto_shouldNotBeFound(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoEdited) {
        $this->_client->delete($soggettoEdited->getId());

        $this->_client->get($soggettoEdited->getId());
    }

    /**
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_gettingSoggettoWithWrongId_shouldThrowException() {
        $sogg = $this->_client->get('YOU_CANNOT_FIND_ME');
    }
}
