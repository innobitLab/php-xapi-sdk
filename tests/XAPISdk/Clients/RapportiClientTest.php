<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class RapportiClientTest extends PHPUnit_Framework_TestCase {

    /** @var \XAPISdk\Clients\SoggettiClient  */
    private $_soggettoClient;

    /** @var \XAPISdk\Clients\RapportiClient  */
    private $_rapportoClient;

    /** @var \XAPISdk\Clients\AXAPIBaseClient $tipoSoggettoClient */
    private $_tipoSoggettoClient;

    public function setUp() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            Bootstrap::XAPI_URI,
            Bootstrap::XAPI_PUBLIC_KEY,
            Bootstrap::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $this->_soggettoClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);

        /** @var \XAPISdk\Clients\RapportiClient $rapportiClient */
        $this->_rapportoClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Rapporto::CLASS_NAME);

        /** @var \XAPISdk\Clients\AXAPIBaseClient $tipoSoggettoClient */
        $this->_tipoSoggettoClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\TipoSoggetto::CLASS_NAME);
    }

    /**
     * @group read
     */
    public function test_listingRapporti_shouldReturnObjectsCountAsCount() {
        $count = $this->_rapportoClient->count();

        $rapportiList = $this->_rapportoClient->listAll();

        $this->assertEquals($count, sizeof($rapportiList));
    }

    public function test_addingSoggetto_shouldReturnObjectWithSameProperties() {
        /** @var \XAPISdk\Data\BusinessObjects\Soggetto */
        $soggettoToAdd = new \XAPISdk\Data\BusinessObjects\Soggetto();
        $soggettoToAdd->setRagioneSociale('Innobit, TeamMosaico');
        $soggettoToAdd->setNome('Gabriele');
        $soggettoToAdd->setCognome('Tondi');
        $soggettoToAdd->setPartitaIva('IT123456789');
        $soggettoToAdd->setCodiceFiscale('TNDGRL9237393928');
        $soggettoToAdd->setSitoWeb('http://www.innobit.it');
        $soggettoToAdd->setNote('This is a test!');
        $soggettoToAdd->setSoggettoInMora(false);

        /** @var \XAPISdk\Data\BusinessObjects\Soggetto */
        $soggettoAdded = $this->_soggettoClient->add($soggettoToAdd);

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

    public function test_addingRapporto_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoAdded) {
        /** @var \XAPISdk\Data\BusinessObjects\Rapporto */
        $rapportoToAdd = new \XAPISdk\Data\BusinessObjects\Rapporto();

        $rapportoToAdd->setCodice(null);
        $rapportoToAdd->setEmail('info@innobit.it');
        $rapportoToAdd->setSoggetto($soggettoAdded);
        $rapportoToAdd->setTipoSoggetto($this->_tipoSoggettoClient->loadAsProxy('MOAS200310231140240563000229'));
        $rapportoToAdd->setSedeDocumento(null);
        $rapportoToAdd->setSedeMerce(null);
        $rapportoToAdd->setSedeRiba(null);

        /** @var $rapportoAdded \XAPISdk\Data\BusinessObjects\Rapporto */
        $rapportoAdded = $this->_rapportoClient->add($rapportoToAdd);

        /** @var $rapportoById \XAPISdk\Data\BusinessObjects\Rapporto */
        $rapportoById = $this->_rapportoClient->get($rapportoAdded->getId());

        $codice = $rapportoById->getCodice();

        $this->assertEquals($rapportoToAdd->getCodice(), $rapportoById->getCodice());

        return $rapportoAdded;
    }
}