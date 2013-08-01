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
use XAPISdk\Data\BusinessObjects\Articolo;
use XAPISdk\Data\BusinessObjects\Banca;
use XAPISdk\Data\BusinessObjects\CategoriaMerceologica;
use XAPISdk\Data\BusinessObjects\CausaleContabile;
use XAPISdk\Data\BusinessObjects\CausaleMagazzino;
use XAPISdk\Data\BusinessObjects\Comune;
use XAPISdk\Data\BusinessObjects\Contatto;
use XAPISdk\Data\BusinessObjects\Deposito;
use XAPISdk\Data\BusinessObjects\Divisione;
use XAPISdk\Data\BusinessObjects\DocumentoDettaglio;
use XAPISdk\Data\BusinessObjects\DocumentoTestata;
use XAPISdk\Data\BusinessObjects\Imballo;
use XAPISdk\Data\BusinessObjects\Iva;
use XAPISdk\Data\BusinessObjects\Listino;
use XAPISdk\Data\BusinessObjects\ListinoPrezzo;
use XAPISdk\Data\BusinessObjects\Marca;
use XAPISdk\Data\BusinessObjects\ModalitaPagamento;
use XAPISdk\Data\BusinessObjects\ModalitaTrasporto;
use XAPISdk\Data\BusinessObjects\NaturaGiuridica;
use XAPISdk\Data\BusinessObjects\Nazione;
use XAPISdk\Data\BusinessObjects\Porto;
use XAPISdk\Data\BusinessObjects\Provincia;
use XAPISdk\Data\BusinessObjects\Rapporto;
use XAPISdk\Data\BusinessObjects\Regione;
use XAPISdk\Data\BusinessObjects\Sede;
use XAPISdk\Data\BusinessObjects\Soggetto;
use XAPISdk\Data\BusinessObjects\TipoArticolo;
use XAPISdk\Data\BusinessObjects\TipoCausale;
use XAPISdk\Data\BusinessObjects\TipoDocumento;
use XAPISdk\Data\BusinessObjects\TipoSede;
use XAPISdk\Data\BusinessObjects\TipoSoggetto;
use XAPISdk\Data\BusinessObjects\UnitaMisura;
use XAPISdk\Data\BusinessObjects\Valuta;
use XAPISdk\Data\BusinessObjects\Vettore;

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

            case Articolo::CLASS_NAME:
                return $this->instantiateClient(ArticoliClient::CLASS_NAME);

            case CategoriaMerceologica::CLASS_NAME:
                return $this->instantiateClient(CategoriaMerceologicaClient::CLASS_NAME);

            case Imballo::CLASS_NAME:
                return $this->instantiateClient(ImballiClient::CLASS_NAME);

            case ListinoPrezzo::CLASS_NAME:
                return $this->instantiateClient(ListiniPrezzoClient::CLASS_NAME);

            case Marca::CLASS_NAME:
                return $this->instantiateClient(MarcheClient::CLASS_NAME);

            case TipoArticolo::CLASS_NAME:
                return $this->instantiateClient(TipiArticoloClient::CLASS_NAME);

            case UnitaMisura::CLASS_NAME:
                return $this->instantiateClient(UnitaMisuraClient::CLASS_NAME);

            case Valuta::CLASS_NAME:
                return $this->instantiateClient(ValuteClient::CLASS_NAME);

            case Comune::CLASS_NAME:
                return $this->instantiateClient(ComuniClient::CLASS_NAME);

            case Provincia::CLASS_NAME:
                return $this->instantiateClient(ProvinceClient::CLASS_NAME);

            case Regione::CLASS_NAME:
                return $this->instantiateClient(RegioniClient::CLASS_NAME);

            case CausaleContabile::CLASS_NAME:
                return $this->instantiateClient(CausaliContabileClient::CLASS_NAME);

            case CausaleMagazzino::CLASS_NAME:
                return $this->instantiateClient(CausaliMagazzinoClient::CLASS_NAME);

            case TipoCausale::CLASS_NAME:
                return $this->instantiateClient(TipiCausaleClient::CLASS_NAME);

            case TipoDocumento::CLASS_NAME:
                return $this->instantiateClient(TipiDocumentoClient::CLASS_NAME);

            case Divisione::CLASS_NAME:
                return $this->instantiateClient(DivisioniClient::CLASS_NAME);

            case DocumentoTestata::CLASS_NAME:
                return $this->instantiateClient(DocumentiTestataClient::CLASS_NAME);

            case ModalitaTrasporto::CLASS_NAME:
                return $this->instantiateClient(ModalitaTrasportoClient::CLASS_NAME);

            case Porto::CLASS_NAME:
                return $this->instantiateClient(PortiClient::CLASS_NAME);

            case Vettore::CLASS_NAME:
                return $this->instantiateClient(VettoriClient::CLASS_NAME);

            case DocumentoDettaglio::CLASS_NAME:
                return $this->instantiateClient(DocumentoDettaglio::CLASS_NAME);

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