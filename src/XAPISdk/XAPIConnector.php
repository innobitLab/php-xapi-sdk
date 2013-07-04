<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk;

use XAPISdk\Clients\ClientFactory;
use XAPISdk\Configuration\XAPISdkConfiguration;
use XAPISdk\Data\BusinessObjects\Sede;
use XAPISdk\Data\BusinessObjects\Soggetto;
use XAPISdk\Data\BusinessObjects\TipoSoggetto;
use XAPISdk\Log\ILog;

class XAPIConnector {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --

    private $_clientFactory;

    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function __construct($xapiUri, $xapiPublicKey, $xapiPrivateKey, ILog $logger = null) {
        $xapiConf = new XAPISdkConfiguration($xapiUri,
            $xapiPublicKey,
            $xapiPrivateKey,
            $logger);

        $this->_clientFactory = new ClientFactory($xapiConf);
    }

    // region -- Soggetto --

    public function getSoggetto($id) {
        $client = $this->getClientForBusinessObjectType(Soggetto::CLASS_NAME);

        $res = $client->get($id);

        return $res;
    }

    public function addSoggetto(Soggetto $soggettoToAdd) {
        $client = $this->getClientForBusinessObjectType(Soggetto::CLASS_NAME);

        $res = $client->add($soggettoToAdd);

        return $res;
    }

    // endregion

    // region -- Sede --

    public function getSede($id) {
        $client = $this->getClientForBusinessObjectType(Sede::CLASS_NAME);

        $res = $client->get($id);

        return $res;
    }

    public function addSede(Sede $sedeToAdd) {
        $client = $this->getClientForBusinessObjectType(Sede::CLASS_NAME);

        $res = $client->add($sedeToAdd);

        return $res;
    }

    // endregion

    // region -- TipoSoggetto --

    public function listTipiSoggetto() {
        $client = $this->getClientForBusinessObjectType(TipoSoggetto::CLASS_NAME);

        $res = $client->listAll();

        return $res;
    }

    // endregion

    private function getClientForBusinessObjectType($businessObjectType) {
        return $this->_clientFactory->getClientForBusinessObject($businessObjectType);
    }

    // endregion

}