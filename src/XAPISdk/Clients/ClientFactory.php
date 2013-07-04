<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Clients;

use XAPISdk\Configuration\XAPISdkConfiguration;
use XAPISdk\Data\BusinessObjects\Agente;
use XAPISdk\Data\BusinessObjects\Banca;
use XAPISdk\Data\BusinessObjects\Contatto;
use XAPISdk\Data\BusinessObjects\Deposito;
use XAPISdk\Data\BusinessObjects\Iva;
use XAPISdk\Data\BusinessObjects\Listino;
use XAPISdk\Data\BusinessObjects\ModalitaPagamento;
use XAPISdk\Data\BusinessObjects\NaturaGiuridica;
use XAPISdk\Data\BusinessObjects\Nazione;
use XAPISdk\Data\BusinessObjects\Rapporto;
use XAPISdk\Data\BusinessObjects\Sede;
use XAPISdk\Data\BusinessObjects\Soggetto;
use XAPISdk\Data\BusinessObjects\TipoSede;
use XAPISdk\Data\BusinessObjects\TipoSoggetto;

class ClientFactory {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --

    private $_xapiSdkConf;

    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function __construct(XAPISdkConfiguration $conf) {
        $this->_xapiSdkConf = $conf;
    }

    public function getClientForBusinessObject($businessObjectType) {

        switch($businessObjectType) {

            case Rapporto::CLASS_NAME:
                return $this->instantiateClient(RapportiClient::CLASS_NAME);

            case Soggetto::CLASS_NAME:
                return $this->instantiateClient(SoggettiClient::CLASS_NAME);

            case TipoSoggetto::CLASS_NAME:
                return $this->instantiateClient(TipiSoggettoClient::CLASS_NAME);

            case NaturaGiuridica::CLASS_NAME:
                return $this->instantiateClient(NatureGiuridicaClient::CLASS_NAME);

            case Nazione::CLASS_NAME:
                return $this->instantiateClient(NazioniClient::CLASS_NAME);

            case Contatto::CLASS_NAME:
                return $this->instantiateClient(ContattiClient::CLASS_NAME);

            case Sede::CLASS_NAME:
                return $this->instantiateClient(SediClient::CLASS_NAME);

            case TipoSede::CLASS_NAME:
                return $this->instantiateClient(TipiSedeClient::CLASS_NAME);

            case Iva::CLASS_NAME:
                return $this->instantiateClient(IvaClient::CLASS_NAME);

            case Agente::CLASS_NAME:
                return $this->instantiateClient(AgentiClient::CLASS_NAME);

            case Listino::CLASS_NAME:
                return $this->instantiateClient(ListiniClient::CLASS_NAME);

            case ModalitaPagamento::CLASS_NAME:
                return $this->instantiateClient(ModalitaPagamentoClient::CLASS_NAME);

            case Deposito::CLASS_NAME:
                return $this->instantiateClient(DepositiClient::CLASS_NAME);

            case Banca::CLASS_NAME:
                return $this->instantiateClient(BancheClient::CLASS_NAME);

            default:
                throw new \Exception('Cannot instantiace client businessObjectType [' . $businessObjectType . ']');

        }
    }

    private  function instantiateClient($clientClassName) {
        $client = new $clientClassName($this->_xapiSdkConf);

        return $client;
    }

    // endregion

}