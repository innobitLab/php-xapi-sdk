<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Rapporto extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_soggetto;
    protected $_codice;
    protected $_committente;
    protected $_dataRegEsenzione;
    protected $_numeroRegEsenzione;
    protected $_dataScadenzaEsenzione;
    protected $_numeroEsenzione;
    protected $_dataEsenzione;
    protected $_personaDaContattare;
    protected $_email;
    protected $_contoCorrente;
    protected $_codicePaese;
    protected $_iban;
    protected $_swift;
    protected $_note;
    protected $_tipoSoggetto;
    protected $_sedeDocumento;
    protected $_sedeMerce;
    protected $_sedeRiba;
    protected $_esenzioneIva;
    protected $_agente;
    protected $_listino;
    protected $_modalitaPagamento;
    protected $_deposito;
    protected $_banca;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAgente($agente) {
        $this->_agente = $agente;
    }

    public function getAgente() {
        $res = $this->_agente;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setBanca($banca) {
        $this->_banca = $banca;
    }

    public function getBanca() {
        $res = $this->_banca;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setCodicePaese($codicePaese) {
        $this->_codicePaese = $codicePaese;
    }

    public function getCodicePaese() {
        return $this->_codicePaese;
    }

    public function setCommittente($committente) {
        $this->_committente = $committente;
    }

    public function getCommittente() {
        return $this->_committente;
    }

    public function setContoCorrente($contoCorrente) {
        $this->_contoCorrente = $contoCorrente;
    }

    public function getContoCorrente() {
        return $this->_contoCorrente;
    }

    public function setDataEsenzione($dataEsenzione) {
        $this->_dataEsenzione = $dataEsenzione;
    }

    public function getDataEsenzione() {
        return $this->_dataEsenzione;
    }

    public function setDataRegEsenzione($dataRegEsenzione) {
        $this->_dataRegEsenzione = $dataRegEsenzione;
    }

    public function getDataRegEsenzione() {
        return $this->_dataRegEsenzione;
    }

    public function setDataScadenzaEsenzione($dataScadenzaEsenzione) {
        $this->_dataScadenzaEsenzione = $dataScadenzaEsenzione;
    }

    public function getDataScadenzaEsenzione() {
        return $this->_dataScadenzaEsenzione;
    }

    public function setDeposito($deposito) {
        $this->_deposito = $deposito;
    }

    public function getDeposito() {
        $res = $this->_deposito;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setEmail($email) {
        $this->_email = $email;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function setEsenzioneIva($esenzioneIva) {
        $this->_esenzioneIva = $esenzioneIva;
    }

    public function getEsenzioneIva() {
        $res = $this->_esenzioneIva;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setIban($iban) {
        $this->_iban = $iban;
    }

    public function getIban() {
        return $this->_iban;
    }

    public function setListino($listino) {
        $this->_listino = $listino;
    }

    public function getListino() {
        $res = $this->_listino;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setModalitaPagamento($modalitaPagamento) {
        $this->_modalitaPagamento = $modalitaPagamento;
    }

    public function getModalitaPagamento() {
        $res = $this->_modalitaPagamento;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setNote($note) {
        $this->_note = $note;
    }

    public function getNote() {
        return $this->_note;
    }

    public function setNumeroEsenzione($numeroEsenzione) {
        $this->_numeroEsenzione = $numeroEsenzione;
    }

    public function getNumeroEsenzione() {
        return $this->_numeroEsenzione;
    }

    public function setNumeroRegEsenzione($numeroRegEsenzione) {
        $this->_numeroRegEsenzione = $numeroRegEsenzione;
    }

    public function getNumeroRegEsenzione() {
        return $this->_numeroRegEsenzione;
    }

    public function setPersonaDaContattare($personaDaContattare) {
        $this->_personaDaContattare = $personaDaContattare;
    }

    public function getPersonaDaContattare() {
        return $this->_personaDaContattare;
    }

    public function setSedeDocumento($sedeDocumento) {
        $this->_sedeDocumento = $sedeDocumento;
    }

    public function getSedeDocumento() {
        $res = $this->_sedeDocumento;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSedeMerce($sedeMerce) {
        $this->_sedeMerce = $sedeMerce;
    }

    public function getSedeMerce() {
        $res = $this->_sedeMerce;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSedeRiba($sedeRiba) {
        $this->_sedeRiba = $sedeRiba;
    }

    public function getSedeRiba() {
        $res = $this->_sedeRiba;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        $res = $this->_soggetto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSwift($swift) {
        $this->_swift = $swift;
    }

    public function getSwift() {
        return $this->_swift;
    }

    public function setTipoSoggetto($tipoSoggetto) {
        $this->_tipoSoggetto = $tipoSoggetto;
    }

    public function getTipoSoggetto() {
        $res = $this->_tipoSoggetto;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public static function getResourceName() {
        return 'rapporti';
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->committente))
            $this->setCommittente($jsonObj->committente);

        if (isset($jsonObj->dataRegEsenzione) && !empty($jsonObj->dataRegEsenzione))
            $this->setDataRegEsenzione($jsonObj->dataRegEsenzione);

        if (isset($jsonObj->numeroRegEsenzione))
            $this->setNumeroRegEsenzione($jsonObj->numeroRegEsenzione);

        if (isset($jsonObj->dataScadenzaEsenzione) && !empty($jsonObj->dataScadenzaEsenzione))
            $this->setDataScadenzaEsenzione($jsonObj->dataScadenzaEsenzione);

        if (isset($jsonObj->numeroEsenzione))
            $this->setNumeroEsenzione($jsonObj->numeroEsenzione);

        if (isset($jsonObj->dataEsenzione) && !empty($jsonObj->dataEsenzione))
            $this->setDataEsenzione($jsonObj->dataEsenzione);

        if (isset($jsonObj->personaDaContattare))
            $this->setPersonaDaContattare($jsonObj->personaDaContattare);

        if (isset($jsonObj->email))
            $this->setEmail($jsonObj->email);

        if (isset($jsonObj->contoCorrente))
            $this->setContoCorrente($jsonObj->contoCorrente);

        if (isset($jsonObj->codicePaese))
            $this->setCodicePaese($jsonObj->codicePaese);

        if (isset($jsonObj->iban))
            $this->setIban($jsonObj->iban);

        if (isset($jsonObj->swift))
            $this->setSwift($jsonObj->swift);

        if (isset($jsonObj->note))
            $this->setNote($jsonObj->note);

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));

        if (isset($jsonObj->tipoSoggetto))
            $this->setTipoSoggetto(TipoSoggetto::fromJson($jsonObj->tipoSoggetto, $this->_xapiClient));

        if (isset($jsonObj->sedeDocumento))
            $this->setSedeDocumento(Sede::fromJson($jsonObj->sedeDocumento, $this->_xapiClient));

        if (isset($jsonObj->sedeMerce))
            $this->setSedeMerce(Sede::fromJson($jsonObj->sedeMerce, $this->_xapiClient));

        if (isset($jsonObj->sedeRiba))
            $this->setSedeRiba(Sede::fromJson($jsonObj->sedeRiba, $this->_xapiClient));

        if (isset($jsonObj->esenzioneIva))
            $this->setEsenzioneIva(Iva::fromJson($jsonObj->esenzioneIva, $this->_xapiClient));

        if (isset($jsonObj->agente))
            $this->setAgente(Agente::fromJson($jsonObj->agente, $this->_xapiClient));

        if (isset($jsonObj->listino))
            $this->setListino(Listino::fromJson($jsonObj->listino, $this->_xapiClient));

        if (isset($jsonObj->modalitaPagamento))
            $this->setModalitaPagamento(ModalitaPagamento::fromJson($jsonObj->modalitaPagamento, $this->_xapiClient));

        if (isset($jsonObj->deposito))
            $this->setDeposito(Deposito::fromJson($jsonObj->deposito, $this->_xapiClient));

        if (isset($jsonObj->banca))
            $this->setBanca(Banca::fromJson($jsonObj->banca, $this->_xapiClient));
    }

    public function toJson() {
        $toSerialize = array('soggetto' => $this->serializedField($this->_soggetto),
            'codice' => $this->serializedField($this->_codice),
            'committente' => $this->serializedField($this->_committente),
            'dataRegEsenzione' => $this->serializedField($this->_dataRegEsenzione),
            'numeroRegEsenzione' => $this->serializedField($this->_numeroRegEsenzione),
            'dataScadenzaEsenzione' => $this->serializedField($this->_dataScadenzaEsenzione),
            'numeroEsenzione' => $this->serializedField($this->_numeroEsenzione),
            'dataEsenzione' => $this->serializedField($this->_dataEsenzione),
            'personaDaContattare' => $this->serializedField($this->_personaDaContattare),
            'email' => $this->serializedField($this->_email),
            'contoCorrente' => $this->serializedField($this->_contoCorrente),
            'codicePaese' => $this->serializedField($this->_codicePaese),
            'iban' => $this->serializedField($this->_iban),
            'swift' => $this->serializedField($this->_swift),
            'note' => $this->serializedField($this->_note),
            'tipoSoggetto' => $this->serializedField($this->_tipoSoggetto),
            'sedeDocumento' => $this->serializedField($this->_sedeDocumento),
            'sedeMerce' => $this->serializedField($this->_sedeMerce),
            'sedeRiba' => $this->serializedField($this->_sedeRiba),
            'esenzioneIva' => $this->serializedField($this->_esenzioneIva),
            'agente' => $this->serializedField($this->_agente),
            'listino' => $this->serializedField($this->_listino),
            'modalitaPagamento' => $this->serializedField($this->_modalitaPagamento),
            'deposito' => $this->serializedField($this->_deposito),
            'banca' => $this->serializedField($this->_banca));

        return json_encode($toSerialize);
    }

    // endregion

}