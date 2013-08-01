<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Data\BusinessObjects;

class DocumentoDettaglio extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_progressivo;
    protected $_codiceArticolo;
    protected $_codiceArticoloEtichetta;
    protected $_codiceArticoloFornitore;
    protected $_descrizione;
    protected $_fattoreUM;
    protected $_qta;
    protected $_prezzoNetto;
    protected $_prezzoIvato;
    protected $_importoNetto;
    protected $_imposta;
    protected $_aliquotaIva;
    protected $_importoIvato;
    protected $_sconto1;
    protected $_sconto2;
    protected $_sconto3;
    protected $_moltiplicatore;

    protected $_documentoTestata;
    protected $_articolo;
    protected $_unitaMisura;
    protected $_iva;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAliquotaIva($aliquotaIva) {
        $this->_aliquotaIva = $aliquotaIva;
    }

    public function getAliquotaIva() {
        return $this->_aliquotaIva;
    }

    public function setCodiceArticolo($codiceArticolo) {
        $this->_codiceArticolo = $codiceArticolo;
    }

    public function getCodiceArticolo() {
        return $this->_codiceArticolo;
    }

    public function setCodiceArticoloEtichetta($codiceArticoloEtichetta) {
        $this->_codiceArticoloEtichetta = $codiceArticoloEtichetta;
    }

    public function getCodiceArticoloEtichetta() {
        return $this->_codiceArticoloEtichetta;
    }

    public function setCodiceArticoloFornitore($codiceArticoloFornitore) {
        $this->_codiceArticoloFornitore = $codiceArticoloFornitore;
    }

    public function getCodiceArticoloFornitore() {
        return $this->_codiceArticoloFornitore;
    }

    public function setDescrizione($descrizione) {
        $this->_descrizione = $descrizione;
    }

    public function getDescrizione() {
        return $this->_descrizione;
    }

    public function setFattoreUM($fattoreUM) {
        $this->_fattoreUM = $fattoreUM;
    }

    public function getFattoreUM() {
        return $this->_fattoreUM;
    }

    public function setImportoIvato($importoIvato) {
        $this->_importoIvato = $importoIvato;
    }

    public function getImportoIvato() {
        return $this->_importoIvato;
    }

    public function setImportoNetto($importoNetto) {
        $this->_importoNetto = $importoNetto;
    }

    public function getImportoNetto() {
        return $this->_importoNetto;
    }

    public function setImposta($imposta) {
        $this->_imposta = $imposta;
    }

    public function getImposta() {
        return $this->_imposta;
    }

    public function setMoltiplicatore($moltiplicatore) {
        $this->_moltiplicatore = $moltiplicatore;
    }

    public function getMoltiplicatore() {
        return $this->_moltiplicatore;
    }

    public function setPrezzoIvato($prezzoIvato) {
        $this->_prezzoIvato = $prezzoIvato;
    }

    public function getPrezzoIvato() {
        return $this->_prezzoIvato;
    }

    public function setPrezzoNetto($prezzoNetto) {
        $this->_prezzoNetto = $prezzoNetto;
    }

    public function getPrezzoNetto() {
        return $this->_prezzoNetto;
    }

    public function setProgressivo($progressivo) {
        $this->_progressivo = $progressivo;
    }

    public function getProgressivo() {
        return $this->_progressivo;
    }

    public function setQta($qta) {
        $this->_qta = $qta;
    }

    public function getQta() {
        return $this->_qta;
    }

    public function setSconto1($sconto1) {
        $this->_sconto1 = $sconto1;
    }

    public function getSconto1() {
        return $this->_sconto1;
    }

    public function setSconto2($sconto2) {
        $this->_sconto2 = $sconto2;
    }

    public function getSconto2() {
        return $this->_sconto2;
    }

    public function setSconto3($sconto3) {
        $this->_sconto3 = $sconto3;
    }

    public function getSconto3() {
        return $this->_sconto3;
    }

    public function setArticolo($articolo) {
        $this->_articolo = $articolo;
    }

    public function getArticolo() {
        $res = $this->_articolo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setIva($iva) {
        $this->_iva = $iva;
    }

    public function getIva() {
        $res = $this->_iva;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setUnitaMisura($unitaMisura) {
        $this->_unitaMisura = $unitaMisura;
    }

    public function getUnitaMisura() {
        $res = $this->_unitaMisura;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setDocumentoTestata($documentoTestata) {
        $this->_documentoTestata = $documentoTestata;
    }

    public function getDocumentoTestata() {
        $res = $this->_documentoTestata;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('progressivo' => $this->serializedField($this->_progressivo),
            'codiceArticolo' => $this->serializedField($this->_codiceArticolo),
            'codiceArticoloEtichetta' => $this->serializedField($this->_codiceArticoloEtichetta),
            'codiceArticoloFornitore' => $this->serializedField($this->_codiceArticoloFornitore),
            'descrizione' => $this->serializedField($this->_descrizione),
            'fattoreUM' => $this->serializedField($this->_fattoreUM),
            'qta' => $this->serializedField($this->_qta),
            'prezzoNetto' => $this->serializedField($this->_prezzoNetto),
            'prezzoIvato' => $this->serializedField($this->_prezzoIvato),
            'importoNetto' => $this->serializedField($this->_importoNetto),
            'imposta' => $this->serializedField($this->_imposta),
            'aliquotaIva' => $this->serializedField($this->_aliquotaIva),
            'importoIvato' => $this->serializedField($this->_importoIvato),
            'sconto1' => $this->serializedField($this->_sconto1),
            'sconto2' => $this->serializedField($this->_sconto2),
            'sconto3' => $this->serializedField($this->_sconto3),
            'moltiplicatore' => $this->serializedField($this->_moltiplicatore),
            'articolo' => $this->serializedField($this->_articolo),
            'unitaMisura' => $this->serializedField($this->_unitaMisura),
            'iva' => $this->serializedField($this->_iva),
            'documentoTestata' => $this->serializedField($this->_documentoTestata));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {

        if (isset($jsonObj->progressivo))
            $this->setProgressivo($jsonObj->progressivo);

        if (isset($jsonObj->codiceArticolo))
            $this->setCodiceArticolo($jsonObj->codiceArticolo);

        if (isset($jsonObj->codiceArticoloEtichetta))
            $this->setCodiceArticoloEtichetta($jsonObj->codiceArticoloEtichetta);

        if (isset($jsonObj->codiceArticoloFornitore))
            $this->setCodiceArticoloFornitore($jsonObj->codiceArticoloFornitore);

        if (isset($jsonObj->descrizione))
            $this->setDescrizione($jsonObj->descrizione);

        if (isset($jsonObj->fattoreUM))
            $this->setFattoreUM($jsonObj->fattoreUM);

        if (isset($jsonObj->qta))
            $this->setQta($jsonObj->qta);

        if (isset($jsonObj->prezzoNetto))
            $this->setPrezzoNetto($jsonObj->prezzoNetto);

        if (isset($jsonObj->prezzoIvato))
            $this->setPrezzoIvato($jsonObj->prezzoIvato);

        if (isset($jsonObj->importoNetto))
            $this->setImportoNetto($jsonObj->importoNetto);

        if (isset($jsonObj->imposta))
            $this->setImposta($jsonObj->imposta);

        if (isset($jsonObj->aliquotaIva))
            $this->setAliquotaIva($jsonObj->aliquotaIva);

        if (isset($jsonObj->importoIvato))
            $this->setImportoIvato($jsonObj->importoIvato);

        if (isset($jsonObj->sconto1))
            $this->setSconto1($jsonObj->sconto1);

        if (isset($jsonObj->sconto2))
            $this->setSconto2($jsonObj->sconto2);

        if (isset($jsonObj->sconto3))
            $this->setSconto3($jsonObj->sconto3);

        if (isset($jsonObj->moltiplicatore))
            $this->setMoltiplicatore($jsonObj->moltiplicatore);

        if (isset($jsonObj->documentoTestata))
            $this->setDocumentoTestata(DocumentoTestata::fromJson($jsonObj->documentoTestata, $this->_xapiClient));

        if (isset($jsonObj->articolo))
            $this->setArticolo(Articolo::fromJson($jsonObj->articolo, $this->_xapiClient));

        if (isset($jsonObj->unitaMisura))
            $this->setUnitaMisura(UnitaMisura::fromJson($jsonObj->unitaMisura, $this->_xapiClient));

        if (isset($jsonObj->iva))
            $this->setIva(Iva::fromJson($jsonObj->iva, $this->_xapiClient));

    }

    public static function getResourceName() {
        return 'documentiDettaglio';
    }

    // endregion

}