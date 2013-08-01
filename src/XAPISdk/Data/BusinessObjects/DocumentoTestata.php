<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class DocumentoTestata extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_anno;
    protected $_cambioValuta;
    protected $_dataDocumento;
    protected $_numeroDocumento;
    protected $_serie;
    protected $_codice;
    protected $_contoCorrente;
    protected $_codicePaese;
    protected $_iban;
    protected $_swift;
    protected $_scontoPercentuale;
    protected $_scontoValore;
    protected $_scontoValorePercentuale;
    protected $_imponibile;
    protected $_imponibileScontato;
    protected $_imposta;
    protected $_totale;
    protected $_noteTestata;
    protected $_notePiede;
    protected $_acconto;
    protected $_speseBancarie;
    protected $_speseTrasporto;
    protected $_assegnaProtocollo;
    protected $_numeroProtocollo;
    protected $_dataProtocollo;
    protected $_protocolloAssegnato;
    protected $_protocolloAggiuntivo;
    protected $_noteImballo;
    protected $_dataConsegna;
    protected $_riferimentoDocumento;
    protected $_sequenziale;
    protected $_terminiConsegna;

    protected $_valuta;
    protected $_causaleMagazzino;
    protected $_causaleMagazzino2;
    protected $_causaleContabile;
    protected $_tipoDocumento;
    protected $_divisione;
    protected $_soggetto;
    protected $_rapporto;
    protected $_sedeLegale;
    protected $_sedeDocumento;
    protected $_sedeMerce;
    protected $_agente;
    protected $_deposito;
    protected $_deposito2;
    protected $_porto;
    protected $_vettore;
    protected $_modalitaTrasporto;
    protected $_banca;
    protected $_modalitaPagamento;
    protected $_assoggettamentoIva;
    protected $_imballo;
    protected $_listino;
    protected $_ordine;

    protected $_documentiDettaglio;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAcconto($acconto) {
        $this->_acconto = $acconto;
    }

    public function getAcconto() {
        return $this->_acconto;
    }

    public function setAnno($anno) {
        $this->_anno = $anno;
    }

    public function getAnno() {
        return $this->_anno;
    }

    public function setAssegnaProtocollo($assegnaProtocollo) {
        $this->_assegnaProtocollo = $assegnaProtocollo;
    }

    public function getAssegnaProtocollo() {
        return $this->_assegnaProtocollo;
    }

    public function setCambioValuta($cambioValuta) {
        $this->_cambioValuta = $cambioValuta;
    }

    public function getCambioValuta() {
        return $this->_cambioValuta;
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

    public function setContoCorrente($contoCorrente) {
        $this->_contoCorrente = $contoCorrente;
    }

    public function getContoCorrente() {
        return $this->_contoCorrente;
    }

    public function setDataConsegna($dataConsegna) {
        $this->_dataConsegna = $dataConsegna;
    }

    public function getDataConsegna() {
        return $this->_dataConsegna;
    }

    public function setDataDocumento($dataDocumento) {
        $this->_dataDocumento = $dataDocumento;
    }

    public function getDataDocumento() {
        return $this->_dataDocumento;
    }

    public function setDataProtocollo($dataProtocollo) {
        $this->_dataProtocollo = $dataProtocollo;
    }

    public function getDataProtocollo() {
        return $this->_dataProtocollo;
    }

    public function setIban($iban) {
        $this->_iban = $iban;
    }

    public function getIban() {
        return $this->_iban;
    }

    public function setImponibile($imponibile) {
        $this->_imponibile = $imponibile;
    }

    public function getImponibile() {
        return $this->_imponibile;
    }

    public function setImponibileScontato($imponibileScontato) {
        $this->_imponibileScontato = $imponibileScontato;
    }

    public function getImponibileScontato() {
        return $this->_imponibileScontato;
    }

    public function setImposta($imposta) {
        $this->_imposta = $imposta;
    }

    public function getImposta() {
        return $this->_imposta;
    }

    public function setNoteImballo($noteImballo) {
        $this->_noteImballo = $noteImballo;
    }

    public function getNoteImballo() {
        return $this->_noteImballo;
    }

    public function setNotePiede($notePiede) {
        $this->_notePiede = $notePiede;
    }

    public function getNotePiede() {
        return $this->_notePiede;
    }

    public function setNoteTestata($noteTestata) {
        $this->_noteTestata = $noteTestata;
    }

    public function getNoteTestata() {
        return $this->_noteTestata;
    }

    public function setNumeroDocumento($numeroDocumento) {
        $this->_numeroDocumento = $numeroDocumento;
    }

    public function getNumeroDocumento() {
        return $this->_numeroDocumento;
    }

    public function setNumeroProtocollo($numeroProtocollo) {
        $this->_numeroProtocollo = $numeroProtocollo;
    }

    public function getNumeroProtocollo() {
        return $this->_numeroProtocollo;
    }

    public function setProtocolloAggiuntivo($protocolloAggiuntivo) {
        $this->_protocolloAggiuntivo = $protocolloAggiuntivo;
    }

    public function getProtocolloAggiuntivo() {
        return $this->_protocolloAggiuntivo;
    }

    public function setProtocolloAssegnato($protocolloAssegnato) {
        $this->_protocolloAssegnato = $protocolloAssegnato;
    }

    public function getProtocolloAssegnato() {
        return $this->_protocolloAssegnato;
    }

    public function setRiferimentoDocumento($riferimentoDocumento) {
        $this->_riferimentoDocumento = $riferimentoDocumento;
    }

    public function getRiferimentoDocumento() {
        return $this->_riferimentoDocumento;
    }

    public function setScontoPercentuale($scontoPercentuale) {
        $this->_scontoPercentuale = $scontoPercentuale;
    }

    public function getScontoPercentuale() {
        return $this->_scontoPercentuale;
    }

    public function setScontoValore($scontoValore) {
        $this->_scontoValore = $scontoValore;
    }

    public function getScontoValore() {
        return $this->_scontoValore;
    }

    public function setScontoValorePercentuale($scontoValorePercentuale) {
        $this->_scontoValorePercentuale = $scontoValorePercentuale;
    }

    public function getScontoValorePercentuale() {
        return $this->_scontoValorePercentuale;
    }

    public function setSequenziale($sequenziale) {
        $this->_sequenziale = $sequenziale;
    }

    public function getSequenziale() {
        return $this->_sequenziale;
    }

    public function setSerie($serie) {
        $this->_serie = $serie;
    }

    public function getSerie() {
        return $this->_serie;
    }

    public function setSpeseBancarie($speseBancarie) {
        $this->_speseBancarie = $speseBancarie;
    }

    public function getSpeseBancarie() {
        return $this->_speseBancarie;
    }

    public function setSpeseTrasporto($speseTrasporto) {
        $this->_speseTrasporto = $speseTrasporto;
    }

    public function getSpeseTrasporto() {
        return $this->_speseTrasporto;
    }

    public function setSwift($swift) {
        $this->_swift = $swift;
    }

    public function getSwift() {
        return $this->_swift;
    }

    public function setTerminiConsegna($terminiConsegna) {
        $this->_terminiConsegna = $terminiConsegna;
    }

    public function getTerminiConsegna() {
        return $this->_terminiConsegna;
    }

    public function setTotale($totale) {
        $this->_totale = $totale;
    }

    public function getTotale() {
        return $this->_totale;
    }

    // sub business objects

    public function setAgente($agente) {
        $this->_agente = $agente;
    }

    public function getAgente() {
        $res = $this->_agente;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setAssoggettamentoIva($assoggettamentoIva) {
        $this->_assoggettamentoIva = $assoggettamentoIva;
    }

    public function getAssoggettamentoIva() {
        $res = $this->_assoggettamentoIva;
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

    public function setCausaleContabile($causaleContabile) {
        $this->_causaleContabile = $causaleContabile;
    }

    public function getCausaleContabile() {
        $res = $this->_causaleContabile;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setCausaleMagazzino($causaleMagazzino) {
        $this->_causaleMagazzino = $causaleMagazzino;
    }

    public function getCausaleMagazzino() {
        $res = $this->_causaleMagazzino;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setCausaleMagazzino2($causaleMagazzino2) {
        $this->_causaleMagazzino2 = $causaleMagazzino2;
    }

    public function getCausaleMagazzino2() {
        $res = $this->_causaleMagazzino2;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setDeposito($deposito) {
        $this->_deposito = $deposito;
    }

    public function getDeposito() {
        $res = $this->_deposito;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setDeposito2($deposito2) {
        $this->_deposito2 = $deposito2;
    }

    public function getDeposito2() {
        $res = $this->_deposito2;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setDivisione($divisione) {
        $this->_divisione = $divisione;
    }

    public function getDivisione() {
        $res = $this->_divisione;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setDocumentiDettaglio($documentiDettaglio) {
        $this->_documentiDettaglio = $documentiDettaglio;
    }

    public function getDocumentiDettaglio() {
        $res = $this->_documentiDettaglio;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setImballo($imballo) {
        $this->_imballo = $imballo;
    }

    public function getImballo() {
        $res = $this->_imballo;
        $res = $this->delazyField($res);
        return $res;
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

    public function setModalitaTrasporto($modalitaTrasporto) {
        $this->_modalitaTrasporto = $modalitaTrasporto;
    }

    public function getModalitaTrasporto() {
        $res = $this->_modalitaTrasporto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setOrdine($ordine) {
        $this->_ordine = $ordine;
    }

    public function getOrdine() {
        $res = $this->_ordine;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setPorto($porto) {
        $this->_porto = $porto;
    }

    public function getPorto() {
        $res = $this->_porto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setRapporto($rapporto) {
        $this->_rapporto = $rapporto;
    }

    public function getRapporto() {
        $res = $this->_rapporto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSedeDocumento($sedeDocumento) {
        $this->_sedeDocumento = $sedeDocumento;
    }

    public function getSedeDocumento() {
        $res = $this->_sedeDocumento;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setSedeLegale($sedeLegale) {
        $this->_sedeLegale = $sedeLegale;
    }

    public function getSedeLegale() {
        $res = $this->_sedeLegale;
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

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        $res = $this->_soggetto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setTipoDocumento($tipoDocumento) {
        $this->_tipoDocumento = $tipoDocumento;
    }

    public function getTipoDocumento() {
        $res = $this->_tipoDocumento;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setValuta($valuta) {
        $this->_valuta = $valuta;
    }

    public function getValuta() {
        $res = $this->_valuta;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setVettore($vettore) {
        $this->_vettore = $vettore;
    }

    public function getVettore() {
        $res = $this->_vettore;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('anno' => $this->serializedField($this->_anno),
            'cambioValuta' => $this->serializedField($this->_cambioValuta),
            'dataDocumento' => $this->serializedField($this->_dataDocumento),
            'numeroDocumento' => $this->serializedField($this->_numeroDocumento),
            'serie' => $this->serializedField($this->_serie),
            'codice' => $this->serializedField($this->_codice),
            'contoCorrente' => $this->serializedField($this->_contoCorrente),
            'codicePaese' => $this->serializedField($this->_codicePaese),
            'iban' => $this->serializedField($this->_iban),
            'swift' => $this->serializedField($this->_swift),
            'scontoPercentuale' => $this->serializedField($this->_scontoPercentuale),
            'scontoValore' => $this->serializedField($this->_scontoValore),
            'scontoValorePercentuale' => $this->serializedField($this->_scontoValorePercentuale),
            'imponibile' => $this->serializedField($this->_imponibile),
            'imponibileScontato' => $this->serializedField($this->_imponibileScontato),
            'imposta' => $this->serializedField($this->_imposta),
            'totale' => $this->serializedField($this->_totale),
            'noteTestata' => $this->serializedField($this->_noteTestata),
            'notePiede' => $this->serializedField($this->_notePiede),
            'acconto' => $this->serializedField($this->_acconto),
            'speseBancarie' => $this->serializedField($this->_speseBancarie),
            'speseTrasporto' => $this->serializedField($this->_speseTrasporto),
            'assegnaProtocollo' => $this->serializedField($this->_assegnaProtocollo),
            'numeroProtocollo' => $this->serializedField($this->_numeroProtocollo),
            'dataProtocollo' => $this->serializedField($this->_dataProtocollo),
            'protocolloAssegnato' => $this->serializedField($this->_protocolloAssegnato),
            'protocolloAggiuntivo' => $this->serializedField($this->_protocolloAggiuntivo),
            'noteImballo' => $this->serializedField($this->_noteImballo),
            'dataConsegna' => $this->serializedField($this->_dataConsegna),
            'riferimentoDocumento' => $this->serializedField($this->_riferimentoDocumento),
            'sequenziale' => $this->serializedField($this->_sequenziale),
            'terminiConsegna' => $this->serializedField($this->_terminiConsegna),
            'valuta' => $this->serializedField($this->_valuta),
            'causaleMagazzino' => $this->serializedField($this->_causaleMagazzino),
            'causaleMagazzino2' => $this->serializedField($this->_causaleMagazzino2),
            'causaleContabile' => $this->serializedField($this->_causaleContabile),
            'tipoDocumento' => $this->serializedField($this->_tipoDocumento),
            'divisione' => $this->serializedField($this->_divisione),
            'soggetto' => $this->serializedField($this->_soggetto),
            'rapporto' => $this->serializedField($this->_rapporto),
            'sedeLegale' => $this->serializedField($this->_sedeLegale),
            'sedeDocumento' => $this->serializedField($this->_sedeDocumento),
            'sedeMerce' => $this->serializedField($this->_sedeMerce),
            'agente' => $this->serializedField($this->_agente),
            'deposito' => $this->serializedField($this->_deposito),
            'deposito2' => $this->serializedField($this->_deposito2),
            'porto' => $this->serializedField($this->_porto),
            'vettore' => $this->serializedField($this->_vettore),
            'modalitaTrasporto' => $this->serializedField($this->_modalitaTrasporto),
            'banca' => $this->serializedField($this->_banca),
            'modalitaPagamento' => $this->serializedField($this->_modalitaPagamento),
            'assoggettamentoIva' => $this->serializedField($this->_assoggettamentoIva),
            'imballo' => $this->serializedField($this->_imballo),
            'listino' => $this->serializedField($this->_listino),
            'ordine' => $this->serializedField($this->_ordine));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->anno))
            $this->setAnno($jsonObj->anno);

        if (isset($jsonObj->cambioValuta))
            $this->setCambioValuta($jsonObj->cambioValuta);

        if (isset($jsonObj->dataDocumento))
            $this->setDataDocumento($this->parseDate($jsonObj->dataDocumento));

        if (isset($jsonObj->numeroDocumento))
            $this->setNumeroDocumento($jsonObj->numeroDocumento);

        if (isset($jsonObj->serie))
            $this->setSerie($jsonObj->serie);

        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->contoCorrente))
            $this->setContoCorrente($jsonObj->contoCorrente);

        if (isset($jsonObj->codicePaese))
            $this->setCodicePaese($jsonObj->codicePaese);

        if (isset($jsonObj->iban))
            $this->setIban($jsonObj->iban);

        if (isset($jsonObj->swift))
            $this->setSwift($jsonObj->swift);

        if (isset($jsonObj->scontoPercentuale))
            $this->setScontoPercentuale($jsonObj->scontoPercentuale);

        if (isset($jsonObj->scontoValore))
            $this->setScontoValore($jsonObj->scontoValore);

        if (isset($jsonObj->scontoValorePercentuale))
            $this->setScontoValorePercentuale($jsonObj->scontoValorePercentuale);

        if (isset($jsonObj->imponibile))
            $this->setImponibile($jsonObj->imponibile);

        if (isset($jsonObj->imponibileScontato))
            $this->setImponibileScontato($jsonObj->imponibileScontato);

        if (isset($jsonObj->imposta))
            $this->setImposta($jsonObj->imposta);

        if (isset($jsonObj->totale))
            $this->setTotale($jsonObj->totale);

        if (isset($jsonObj->noteTestata))
            $this->setNoteTestata($jsonObj->noteTestata);

        if (isset($jsonObj->notePiede))
            $this->setNotePiede($jsonObj->notePiede);

        if (isset($jsonObj->acconto))
            $this->setAcconto($jsonObj->acconto);

        if (isset($jsonObj->speseBancarie))
            $this->setSpeseBancarie($jsonObj->speseBancarie);

        if (isset($jsonObj->speseTrasporto))
            $this->setSpeseTrasporto($jsonObj->speseTrasporto);

        if (isset($jsonObj->assegnaProtocollo))
            $this->setAssegnaProtocollo($jsonObj->assegnaProtocollo);

        if (isset($jsonObj->numeroProtocollo))
            $this->setNumeroProtocollo($jsonObj->numeroProtocollo);

        if (isset($jsonObj->dataProtocollo))
            $this->setDataProtocollo($this->parseDate($jsonObj->dataProtocollo));

        if (isset($jsonObj->protocolloAssegnato))
            $this->setProtocolloAssegnato($jsonObj->protocolloAssegnato);

        if (isset($jsonObj->protocolloAggiuntivo))
            $this->setProtocolloAggiuntivo($jsonObj->protocolloAggiuntivo);

        if (isset($jsonObj->noteImballo))
            $this->setNoteImballo($jsonObj->noteImballo);

        if (isset($jsonObj->dataConsegna))
            $this->setDataConsegna($this->parseDate($jsonObj->dataConsegna));

        if (isset($jsonObj->riferimentoDocumento))
            $this->setRiferimentoDocumento($jsonObj->riferimentoDocumento);

        if (isset($jsonObj->sequenziale))
            $this->setSequenziale($jsonObj->sequenziale);

        if (isset($jsonObj->terminiConsegna))
            $this->setTerminiConsegna($jsonObj->terminiConsegna);

        if (isset($jsonObj->valuta))
            $this->setValuta(Valuta::fromJson($jsonObj->valuta, $this->_xapiClient));

        if (isset($jsonObj->causaleMagazzino))
            $this->setCausaleMagazzino(CausaleMagazzino::fromJson($jsonObj->causaleMagazzino, $this->_xapiClient));

        if (isset($jsonObj->causaleMagazzino2))
            $this->setCausaleMagazzino2(CausaleMagazzino::fromJson($jsonObj->causaleMagazzino2, $this->_xapiClient));

        if (isset($jsonObj->causaleContabile))
            $this->setCausaleContabile(CausaleContabile::fromJson($jsonObj->causaleContabile, $this->_xapiClient));

        if (isset($jsonObj->tipoDocumento))
            $this->setTipoDocumento(TipoDocumento::fromJson($jsonObj->tipoDocumento, $this->_xapiClient));

        if (isset($jsonObj->divisione))
            $this->setDivisione(Divisione::fromJson($jsonObj->divisione, $this->_xapiClient));

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));

        if (isset($jsonObj->rapporto))
            $this->setRapporto(Rapporto::fromJson($jsonObj->rapporto, $this->_xapiClient));

        if (isset($jsonObj->sedeLegale))
            $this->setSedeLegale(Sede::fromJson($jsonObj->sedeLegale, $this->_xapiClient));

        if (isset($jsonObj->sedeDocumento))
            $this->setSedeDocumento(Sede::fromJson($jsonObj->sedeDocumento, $this->_xapiClient));

        if (isset($jsonObj->sedeMerce))
            $this->setSedeMerce(Sede::fromJson($jsonObj->sedeMerce, $this->_xapiClient));

        if (isset($jsonObj->agente))
            $this->setAgente(Agente::fromJson($jsonObj->agente, $this->_xapiClient));

        if (isset($jsonObj->deposito))
            $this->setDeposito(Deposito::fromJson($jsonObj->deposito, $this->_xapiClient));

        if (isset($jsonObj->deposito2))
            $this->setDeposito2(Deposito::fromJson($jsonObj->deposito2, $this->_xapiClient));

        if (isset($jsonObj->porto))
            $this->setPorto(Porto::fromJson($jsonObj->porto, $this->_xapiClient));

        if (isset($jsonObj->vettore))
            $this->setVettore(Vettore::fromJson($jsonObj->vettore, $this->_xapiClient));

        if (isset($jsonObj->modalitaTrasporto))
            $this->setModalitaTrasporto(ModalitaTrasporto::fromJson($jsonObj->modalitaTrasporto, $this->_xapiClient));

        if (isset($jsonObj->banca))
            $this->setBanca(Banca::fromJson($jsonObj->banca, $this->_xapiClient));

        if (isset($jsonObj->modalitaPagamento))
            $this->setModalitaPagamento(ModalitaPagamento::fromJson($jsonObj->modalitaPagamento, $this->_xapiClient));

        if (isset($jsonObj->assoggettamentoIva))
            $this->setAssoggettamentoIva(Iva::fromJson($jsonObj->assoggettamentoIva, $this->_xapiClient));

        if (isset($jsonObj->imballo))
            $this->setImballo(Imballo::fromJson($jsonObj->imballo, $this->_xapiClient));

        if (isset($jsonObj->listino))
            $this->setListino(Listino::fromJson($jsonObj->listino, $this->_xapiClient));

        if (isset($jsonObj->ordine))
            $this->setOrdine(DocumentoTestata::fromJson($jsonObj->ordine, $this->_xapiClient));

        if (isset($jsonObj->documentiDettaglio) && is_array($jsonObj->documentiDettaglio)) {
            $documentiDettaglio = array();

            foreach($jsonObj->documentiDettaglio as $dettaglioObj) {
                $documentiDettaglio[] = DocumentoDettaglio::fromJson($dettaglioObj, $this->_xapiClient);
            }

            $this->setDocumentiDettaglio($documentiDettaglio);
        }

    }

    public static function getResourceName() {
        return 'documentiTestata';
    }

    // endregion

}