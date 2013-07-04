<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once 'bootstrap.php';

class SoggettiClientTest extends PHPUnit_Framework_TestCase {

    const XAPI_URI = 'http://api.mosaicox.net';
    const XAPI_PUBLIC_KEY = '';
    const XAPI_PRIVATE_KEY = '';

    public function test_addingSoggetto_shouldReturnObjectWithSameProperties() {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            self::XAPI_URI,
            self::XAPI_PUBLIC_KEY,
            self::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $soggettiClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);

        $soggettoToAdd = new \XAPISdk\Data\BusinessObjects\Soggetto();
        $soggettoToAdd->setRagioneSociale('Innobit s.r.l. & Co.');
        $soggettoToAdd->setNome('Gabriele');
        $soggettoToAdd->setCognome('Tondi');
        $soggettoToAdd->setPartitaIva('IT123456789');
        $soggettoToAdd->setCodiceFiscale('TNDGRL9237393928');
        $soggettoToAdd->setSitoWeb('http://www.innobit.it');
        $soggettoToAdd->setNote('This is a test!');
        $soggettoToAdd->setSoggettoInMora(false);

        $soggettoAdded = $soggettiClient->add($soggettoToAdd);

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
    public function test_gettingSoggetto_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoAdded) {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            self::XAPI_URI,
            self::XAPI_PUBLIC_KEY,
            self::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $soggettiClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);

        $soggettoGetted = $soggettiClient->get($soggettoAdded->getId());

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
    public function test_editingSoggetto_shouldReturnObjectWithSameProperties(\XAPISdk\Data\BusinessObjects\Soggetto $soggettoGetted) {
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            self::XAPI_URI,
            self::XAPI_PUBLIC_KEY,
            self::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $soggettiClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);

        $soggettoToEdit = $soggettoGetted;

        $soggettoToEdit->setRagioneSociale($soggettoToEdit->getRagioneSociale() . '_1');
        $soggettoToEdit->setNome($soggettoToEdit->getNome() . '_1');
        $soggettoToEdit->setCognome($soggettoToEdit->getCognome() . '_1');
        $soggettoToEdit->setPartitaIva($soggettoToEdit->getPartitaIva() . '_1');
        $soggettoToEdit->setCodiceFiscale($soggettoToEdit->getCodiceFiscale() . '_1');
        $soggettoToEdit->setSitoWeb($soggettoToEdit->getSitoWeb() . '_1');
        $soggettoToEdit->setNote($soggettoToEdit->getNote() . '_1');
        $soggettoToEdit->setSoggettoInMora(true);

        $soggettoEdited = $soggettiClient->update($soggettoToEdit);

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
        $sdkConf = new \XAPISdk\Configuration\XAPISdkConfiguration(
            self::XAPI_URI,
            self::XAPI_PUBLIC_KEY,
            self::XAPI_PRIVATE_KEY
        );

        $clientFactory = new \XAPISdk\Clients\ClientFactory($sdkConf);

        /** @var \XAPISdk\Clients\SoggettiClient $soggettiClient */
        $soggettiClient = $clientFactory->getClientForBusinessObject(\XAPISdk\Data\BusinessObjects\Soggetto::CLASS_NAME);

        $soggettiClient->delete($soggettoEdited->getId());

        $soggettiClient->get($soggettoEdited->getId());
    }
}
