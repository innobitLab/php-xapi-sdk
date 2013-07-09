<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once 'bootstrap.php';

class ArticoliClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\ArticoliClient  */
    private $_client;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        $this->_client = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Articolo::CLASS_NAME);
    }

    public function test_addingArticolo_shouldReturnObjectWithSameProperties() {
        $articoloToAdd = new \XAPISdk\Data\BusinessObjects\Articolo();

        $articoloToAdd->setCodice('TEST_0000001');
        $articoloToAdd->setCodiceEtichetta('ETI_000001');
        $articoloToAdd->setCodiceFornitore('FOR_000001');
        $articoloToAdd->setDescrizione('Descrizione!');
        $articoloToAdd->setDescrizioneEtichetta('DescrizioneEtichetta');
        $articoloToAdd->setFattoreUMCarico(1);
        $articoloToAdd->setFattoreUMScarico(2);
        $articoloToAdd->setSottoScorta(100);
        $articoloToAdd->setMinimoMagazzino(200);
        $articoloToAdd->setAllarmeNegativi(1);
        $articoloToAdd->setAllarmeSottoScorta(1);
        $articoloToAdd->setClasseRiordino(20);
        $articoloToAdd->setGestioneRiordino(1);
        $articoloToAdd->setPesoLordo(100.10);
        $articoloToAdd->setPesoNetto(90.10);
        $articoloToAdd->setPesoImballo(10);
        $articoloToAdd->setVolumeImballo(92.30);
        $articoloToAdd->setGestioneGiacenza(1);
        $articoloToAdd->setGestioneValidita(1);
        $articoloToAdd->setValidita('fino al');
        $articoloToAdd->setStampaNelListino(1);
        $articoloToAdd->setNote('ciao queste sono delle note');
        $articoloToAdd->setAttivo(1);

        /*
        protected $_unitaMisuraMagazzino;
        protected $_unitaMisuraCarico;
        protected $_unitaMisuraScarico;
        protected $_imballo;
        protected $_tipoArticolo;
        protected $_categoriaMerceologica;
        protected $_marca;
        protected $_iva;
        */

        /** @var \XAPISdk\Data\BusinessObjects\Articolo $articoloAdded  */
        $articoloAdded = $this->_client->add($articoloToAdd);

        $this->assertEquals($articoloToAdd->getCodice(), $articoloAdded->getCodice());
        $this->assertEquals($articoloToAdd->getCodiceEtichetta(), $articoloAdded->getCodiceEtichetta());
        $this->assertEquals($articoloToAdd->getCodiceFornitore(), $articoloAdded->getCodiceFornitore());
        $this->assertEquals($articoloToAdd->getDescrizione(), $articoloAdded->getDescrizione());
        $this->assertEquals($articoloToAdd->getDescrizioneEtichetta(), $articoloAdded->getDescrizioneEtichetta());
        $this->assertEquals($articoloToAdd->getFattoreUMCarico(), $articoloAdded->getFattoreUMCarico());
        $this->assertEquals($articoloToAdd->getFattoreUMScarico(), $articoloAdded->getFattoreUMScarico());
        $this->assertEquals($articoloToAdd->getSottoScorta(), $articoloAdded->getSottoScorta());
        $this->assertEquals($articoloToAdd->getMinimoMagazzino(), $articoloAdded->getMinimoMagazzino());
        $this->assertEquals($articoloToAdd->getAllarmeNegativi(), $articoloAdded->getAllarmeNegativi());
        $this->assertEquals($articoloToAdd->getAllarmeSottoScorta(), $articoloAdded->getAllarmeSottoScorta());
        $this->assertEquals($articoloToAdd->getMinimoMagazzino(), $articoloAdded->getMinimoMagazzino());
        $this->assertEquals($articoloToAdd->getAllarmeNegativi(), $articoloAdded->getAllarmeNegativi());
        $this->assertEquals($articoloToAdd->getAllarmeSottoScorta(), $articoloAdded->getAllarmeSottoScorta());
        $this->assertEquals($articoloToAdd->getClasseRiordino(), $articoloAdded->getClasseRiordino());
        $this->assertEquals($articoloToAdd->getGestioneRiordino(), $articoloAdded->getGestioneRiordino());
        $this->assertEquals($articoloToAdd->getPesoLordo(), $articoloAdded->getPesoLordo());
        $this->assertEquals($articoloToAdd->getPesoNetto(), $articoloAdded->getPesoNetto());
        $this->assertEquals($articoloToAdd->getPesoImballo(), $articoloAdded->getPesoImballo());
        $this->assertEquals($articoloToAdd->getVolumeImballo(), $articoloAdded->getVolumeImballo());
        $this->assertEquals($articoloToAdd->getGestioneGiacenza(), $articoloAdded->getGestioneGiacenza());
        $this->assertEquals($articoloToAdd->getGestioneValidita(), $articoloAdded->getGestioneValidita());
        $this->assertEquals($articoloToAdd->getValidita(), $articoloAdded->getValidita());
        $this->assertEquals($articoloToAdd->getStampaNelListino(), $articoloAdded->getStampaNelListino());
        $this->assertEquals($articoloToAdd->getNote(), $articoloAdded->getNote());
        $this->assertEquals($articoloToAdd->getAttivo(), $articoloAdded->getAttivo());

        return $articoloAdded;
    }

    /**
     * @depends test_addingArticolo_shouldReturnObjectWithSameProperties
     */
    public function test_gettingArticolo_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Articolo $articoloAdded) {
        $articoloGetted = $this->_client->get($articoloAdded->getId());

        $this->assertEquals($articoloAdded->getCodice(), $articoloGetted->getCodice());
        $this->assertEquals($articoloAdded->getCodiceEtichetta(), $articoloGetted->getCodiceEtichetta());
        $this->assertEquals($articoloAdded->getCodiceFornitore(), $articoloGetted->getCodiceFornitore());
        $this->assertEquals($articoloAdded->getDescrizione(), $articoloGetted->getDescrizione());
        $this->assertEquals($articoloAdded->getDescrizioneEtichetta(), $articoloGetted->getDescrizioneEtichetta());
        $this->assertEquals($articoloAdded->getFattoreUMCarico(), $articoloGetted->getFattoreUMCarico());
        $this->assertEquals($articoloAdded->getFattoreUMScarico(), $articoloGetted->getFattoreUMScarico());
        $this->assertEquals($articoloAdded->getSottoScorta(), $articoloGetted->getSottoScorta());
        $this->assertEquals($articoloAdded->getMinimoMagazzino(), $articoloGetted->getMinimoMagazzino());
        $this->assertEquals($articoloAdded->getAllarmeNegativi(), $articoloGetted->getAllarmeNegativi());
        $this->assertEquals($articoloAdded->getAllarmeSottoScorta(), $articoloGetted->getAllarmeSottoScorta());
        $this->assertEquals($articoloAdded->getMinimoMagazzino(), $articoloGetted->getMinimoMagazzino());
        $this->assertEquals($articoloAdded->getAllarmeNegativi(), $articoloGetted->getAllarmeNegativi());
        $this->assertEquals($articoloAdded->getAllarmeSottoScorta(), $articoloGetted->getAllarmeSottoScorta());
        $this->assertEquals($articoloAdded->getClasseRiordino(), $articoloGetted->getClasseRiordino());
        $this->assertEquals($articoloAdded->getGestioneRiordino(), $articoloGetted->getGestioneRiordino());
        $this->assertEquals($articoloAdded->getPesoLordo(), $articoloGetted->getPesoLordo());
        $this->assertEquals($articoloAdded->getPesoNetto(), $articoloGetted->getPesoNetto());
        $this->assertEquals($articoloAdded->getPesoImballo(), $articoloGetted->getPesoImballo());
        $this->assertEquals($articoloAdded->getVolumeImballo(), $articoloGetted->getVolumeImballo());
        $this->assertEquals($articoloAdded->getGestioneGiacenza(), $articoloGetted->getGestioneGiacenza());
        $this->assertEquals($articoloAdded->getGestioneValidita(), $articoloGetted->getGestioneValidita());
        $this->assertEquals($articoloAdded->getValidita(), $articoloGetted->getValidita());
        $this->assertEquals($articoloAdded->getStampaNelListino(), $articoloGetted->getStampaNelListino());
        $this->assertEquals($articoloAdded->getNote(), $articoloGetted->getNote());
        $this->assertEquals($articoloAdded->getAttivo(), $articoloGetted->getAttivo());

        return $articoloGetted;
    }

    /**
     * @depends test_gettingArticolo_shouldReturnObjectWithSameProperties
     */
    public function test_editingArticolo_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Articolo $ArticoloGetted) {
        $articoloToEdit = $ArticoloGetted;

        $articoloToEdit->setCodice($articoloToEdit->getCodice() . '_1');
        $articoloToEdit->setCodiceEtichetta($articoloToEdit->getCodiceEtichetta() . '_1');
        $articoloToEdit->setCodiceFornitore($articoloToEdit->getCodiceFornitore() . '_1');
        $articoloToEdit->setDescrizione($articoloToEdit->getDescrizione() . '_1');
        $articoloToEdit->setDescrizioneEtichetta($articoloToEdit->getDescrizioneEtichetta() . '_1');
        $articoloToEdit->setFattoreUMCarico(1.01);
        $articoloToEdit->setFattoreUMScarico(2.01);
        $articoloToEdit->setSottoScorta(101);
        $articoloToEdit->setMinimoMagazzino(201);
        $articoloToEdit->setAllarmeNegativi(false);
        $articoloToEdit->setAllarmeSottoScorta(false);
        $articoloToEdit->setClasseRiordino(30);
        $articoloToEdit->setGestioneRiordino(false);
        $articoloToEdit->setPesoLordo(100.12);
        $articoloToEdit->setPesoNetto(90.12);
        $articoloToEdit->setPesoImballo(12);
        $articoloToEdit->setVolumeImballo(95.30);
        $articoloToEdit->setGestioneGiacenza(false);
        $articoloToEdit->setGestioneValidita(false);
        $articoloToEdit->setValidita('fino al_1');
        $articoloToEdit->setStampaNelListino(false);
        $articoloToEdit->setNote('ciao queste sono delle note_1');
        $articoloToEdit->setAttivo(false);

        $articoloEdited = $this->_client->update($articoloToEdit);

        $this->assertEquals($articoloToEdit->getCodice(), $articoloEdited->getCodice());
        $this->assertEquals($articoloToEdit->getCodiceEtichetta(), $articoloEdited->getCodiceEtichetta());
        $this->assertEquals($articoloToEdit->getCodiceFornitore(), $articoloEdited->getCodiceFornitore());
        $this->assertEquals($articoloToEdit->getDescrizione(), $articoloEdited->getDescrizione());
        $this->assertEquals($articoloToEdit->getDescrizioneEtichetta(), $articoloEdited->getDescrizioneEtichetta());
        $this->assertEquals($articoloToEdit->getFattoreUMCarico(), $articoloEdited->getFattoreUMCarico());
        $this->assertEquals($articoloToEdit->getFattoreUMScarico(), $articoloEdited->getFattoreUMScarico());
        $this->assertEquals($articoloToEdit->getSottoScorta(), $articoloEdited->getSottoScorta());
        $this->assertEquals($articoloToEdit->getMinimoMagazzino(), $articoloEdited->getMinimoMagazzino());
        $this->assertEquals($articoloToEdit->getAllarmeNegativi(), $articoloEdited->getAllarmeNegativi());
        $this->assertEquals($articoloToEdit->getAllarmeSottoScorta(), $articoloEdited->getAllarmeSottoScorta());
        $this->assertEquals($articoloToEdit->getMinimoMagazzino(), $articoloEdited->getMinimoMagazzino());
        $this->assertEquals($articoloToEdit->getAllarmeNegativi(), $articoloEdited->getAllarmeNegativi());
        $this->assertEquals($articoloToEdit->getAllarmeSottoScorta(), $articoloEdited->getAllarmeSottoScorta());
        $this->assertEquals($articoloToEdit->getClasseRiordino(), $articoloEdited->getClasseRiordino());
        $this->assertEquals($articoloToEdit->getGestioneRiordino(), $articoloEdited->getGestioneRiordino());
        $this->assertEquals($articoloToEdit->getPesoLordo(), $articoloEdited->getPesoLordo());
        $this->assertEquals($articoloToEdit->getPesoNetto(), $articoloEdited->getPesoNetto());
        $this->assertEquals($articoloToEdit->getPesoImballo(), $articoloEdited->getPesoImballo());
        $this->assertEquals($articoloToEdit->getVolumeImballo(), $articoloEdited->getVolumeImballo());
        $this->assertEquals($articoloToEdit->getGestioneGiacenza(), $articoloEdited->getGestioneGiacenza());
        $this->assertEquals($articoloToEdit->getGestioneValidita(), $articoloEdited->getGestioneValidita());
        $this->assertEquals($articoloToEdit->getValidita(), $articoloEdited->getValidita());
        $this->assertEquals($articoloToEdit->getStampaNelListino(), $articoloEdited->getStampaNelListino());
        $this->assertEquals($articoloToEdit->getNote(), $articoloEdited->getNote());
        $this->assertEquals($articoloToEdit->getAttivo(), $articoloEdited->getAttivo());

        return $articoloEdited;
    }

    /**
     * @depends test_editingArticolo_shouldReturnObjectWithSameProperties
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_deletingArticolo_shouldNotBeFound(\XAPISdk\Data\BusinessObjects\Articolo $articoloEdited) {
        $this->_client->delete($articoloEdited->getId());

        $this->_client->get($articoloEdited->getId());
    }

    /**
     * @expectedException \XAPISdk\Clients\ResourceNotFoundException
     */
    public function test_gettingArticoloWithWrongId_shouldThrowException() {
        $articolo = $this->_client->get('YOU_CANNOT_FIND_ME');
    }

}
