<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Soggetto extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_ragioneSociale;
    protected $_nome;
    protected $_cognome;
    protected $_partitaIva;
    protected $_codiceFiscale;
    protected $_sitoWeb;
    protected $_note;
    protected $_soggettoInMora;
    protected $_naturaGiuridica;
    protected $_nazione;
    protected $_contatti;
    protected $_rapporti;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setCodiceFiscale($codiceFiscale) {
        $this->_codiceFiscale = $codiceFiscale;
    }

    public function getCodiceFiscale() {
        return $this->_codiceFiscale;
    }

    public function setCognome($cognome) {
        $this->_cognome = $cognome;
    }

    public function getCognome() {
        return $this->_cognome;
    }

    public function setContatti($contatti) {
        $this->_contatti = $contatti;
    }

    public function getContatti() {
        $res = $this->_contatti;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setNaturaGiuridica($naturaGiuridica) {
        $this->_naturaGiuridica = $naturaGiuridica;
    }

    public function getNaturaGiuridica() {
        $res = $this->_naturaGiuridica;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setNazione($nazione) {
        $this->_nazione = $nazione;
    }

    public function getNazione() {
        $res = $this->_nazione;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setNote($note) {
        $this->_note = $note;
    }

    public function getNote() {
        return $this->_note;
    }

    public function setPartitaIva($partitaIva) {
        $this->_partitaIva = $partitaIva;
    }

    public function getPartitaIva() {
        return $this->_partitaIva;
    }

    public function setRagioneSociale($ragioneSociale) {
        $this->_ragioneSociale = $ragioneSociale;
    }

    public function getRagioneSociale() {
        return $this->_ragioneSociale;
    }

    public function setRapporti($rapporti) {
        $this->_rapporti = $rapporti;
    }

    public function getRapporti() {
        $res = $this->_rapporti;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSitoWeb($sitoWeb) {
        $this->_sitoWeb = $sitoWeb;
    }

    public function getSitoWeb() {
        return $this->_sitoWeb;
    }

    public function setSoggettoInMora($soggettoInMora) {
        $this->_soggettoInMora = $soggettoInMora;
    }

    public function getSoggettoInMora() {
        return $this->_soggettoInMora;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('ragioneSociale' => $this->serializedField($this->_ragioneSociale),
            'nome' => $this->serializedField($this->_nome),
            'cognome' => $this->serializedField($this->_cognome),
            'partitaIva' => $this->serializedField($this->_partitaIva),
            'codiceFiscale' => $this->serializedField($this->_codiceFiscale),
            'sitoWeb' => $this->serializedField($this->_sitoWeb),
            'note' => $this->serializedField($this->_note),
            'soggettoInMora' => $this->serializedField($this->_soggettoInMora),
            'naturaGiuridica' => $this->serializedField($this->_naturaGiuridica),
            'nazione' => $this->serializedField($this->_nazione)
        );

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->ragioneSociale))
            $this->setRagioneSociale($jsonObj->ragioneSociale);

        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->cognome))
            $this->setCognome($jsonObj->cognome);

        if (isset($jsonObj->partitaIva))
            $this->setPartitaIva($jsonObj->partitaIva);

        if (isset($jsonObj->codiceFiscale))
            $this->setCodiceFiscale($jsonObj->codiceFiscale);

        if (isset($jsonObj->sitoWeb))
            $this->setSitoWeb($jsonObj->sitoWeb);

        if (isset($jsonObj->note))
            $this->setNote($jsonObj->note);

        if (isset($jsonObj->soggettoInMora))
            $this->setSoggettoInMora($jsonObj->soggettoInMora);

        if (isset($jsonObj->rapporti) && is_array($jsonObj->rapporti)) {
            $rapporti = array();

            foreach($jsonObj->rapporti as $rapObj) {
                $rapporti[] = Rapporto::fromJson($rapObj, $this->_xapiClient);
            }

            $this->setRapporti($rapporti);
        }

        if (isset($jsonObj->contatti) && is_array($jsonObj->contatti)) {
            $contatti = array();

            foreach($jsonObj->contatti as $conObj) {
                $contatti[] = Contatto::fromJson($conObj, $this->_xapiClient);
            }

            $this->setContatti($contatti);
        }

        if (isset($jsonObj->naturaGiuridica))
            $this->setNaturaGiuridica(NaturaGiuridica::fromJson($jsonObj->naturaGiuridica, $this->_xapiClient));

        if (isset($jsonObj->nazione))
            $this->setNazione(Nazione::fromJson($jsonObj->nazione, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'soggetti';
    }

    // endregion

}