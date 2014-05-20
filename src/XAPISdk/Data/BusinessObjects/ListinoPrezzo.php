<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Data\BusinessObjects;

class ListinoPrezzo extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_qtaLimite;
    protected $_formato;
    protected $_sconto1;
    protected $_sconto2;
    protected $_sconto3;
    protected $_ricarico;
    protected $_dalNetto;
    protected $_arrotondamento;
    protected $_punteggio;
    protected $_prezzoNetto;
    protected $_prezzoNettoIvato;
    protected $_prezzo;
    protected $_prezzoIvato;
    protected $_aliquotaIva;
    protected $_prezzoConsigliato;
    protected $_proteggiListino;

    protected $_listino;
    protected $_soggetto;
    protected $_articolo;
    protected $_valuta;
    protected $_listinoRif;
    protected $_unitaMisura;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setArticolo($articolo) {
        $this->_articolo = $articolo;
    }

    public function getArticolo() {
        $res = $this->_articolo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setAliquotaIva($aliquotaIva) {
        $this->_aliquotaIva = $aliquotaIva;
    }

    public function getAliquotaIva() {
        return $this->_aliquotaIva;
    }

    public function setArrotondamento($arrotondamento) {
        $this->_arrotondamento = $arrotondamento;
    }

    public function getArrotondamento() {
        return $this->_arrotondamento;
    }

    public function setDalNetto($dalNetto) {
        $this->_dalNetto = $dalNetto;
    }

    public function getDalNetto() {
        return $this->_dalNetto;
    }

    public function setFormato($formato) {
        $this->_formato = $formato;
    }

    public function getFormato() {
        return $this->_formato;
    }

    public function setListino($listino) {
        $this->_listino = $listino;
    }

    public function getListino() {
        $res = $this->_listino;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setListinoRif($listinoRif) {
        $this->_listinoRif = $listinoRif;
    }

    public function getListinoRif() {
        $res = $this->_listinoRif;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setPrezzo($prezzo) {
        $this->_prezzo = $prezzo;
    }

    public function getPrezzo() {
        return $this->_prezzo;
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

    public function setPrezzoNettoIvato($prezzoNettoIvato) {
        $this->_prezzoNettoIvato = $prezzoNettoIvato;
    }

    public function getPrezzoNettoIvato() {
        return $this->_prezzoNettoIvato;
    }

    public function setProteggiListino($proteggiListino) {
        $this->_proteggiListino = $proteggiListino;
    }

    public function getProteggiListino() {
        return $this->_proteggiListino;
    }

    public function setPunteggio($punteggio) {
        $this->_punteggio = $punteggio;
    }

    public function getPunteggio() {
        return $this->_punteggio;
    }

    public function setQtaLimite($qtaLimite) {
        $this->_qtaLimite = $qtaLimite;
    }

    public function getQtaLimite() {
        return $this->_qtaLimite;
    }

    public function setRicarico($ricarico) {
        $this->_ricarico = $ricarico;
    }

    public function getRicarico() {
        return $this->_ricarico;
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

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        $res = $this->_soggetto;
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

    public function setValuta($valuta) {
        $this->_valuta = $valuta;
    }

    public function getValuta() {
        $res = $this->_valuta;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setPrezzoConsigliato($prezzoConsigliato) {
        $this->_prezzoConsigliato = $prezzoConsigliato;
    }

    public function getPrezzoConsigliato() {
        return $this->_prezzoConsigliato;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('qtaLimite' => $this->serializedField($this->_qtaLimite),
            'formato' => $this->serializedField($this->_formato),
            'sconto1' => $this->serializedField($this->_sconto1),
            'sconto2' => $this->serializedField($this->_sconto2),
            'sconto3' => $this->serializedField($this->_sconto3),
            'ricarico' => $this->serializedField($this->_ricarico),
            'dalNetto' => $this->serializedField($this->_dalNetto),
            'arrotondamento' => $this->serializedField($this->_arrotondamento),
            'punteggio' => $this->serializedField($this->_punteggio),
            'prezzoNetto' => $this->serializedField($this->_prezzoNetto),
            'prezzoNettoIvato' => $this->serializedField($this->_prezzoNettoIvato),
            'prezzo' => $this->serializedField($this->_prezzo),
            'prezzoIvato' => $this->serializedField($this->_prezzoIvato),
            'aliquotaIva' => $this->serializedField($this->_aliquotaIva),
            'proteggiListino' => $this->serializedField($this->_proteggiListino),
            'listino' => $this->serializedField($this->_listino),
            'soggetto' => $this->serializedField($this->_soggetto),
            'articolo' => $this->serializedField($this->_articolo),
            'valuta' => $this->serializedField($this->_valuta),
            'listinoRif' => $this->serializedField($this->_listinoRif),
            'unitaMisura' => $this->serializedField($this->_unitaMisura),
            'prezzoConsigliato' => $this->serializedField($this->_prezzoConsigliato));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {

        if (isset($jsonObj->qtaLimite))
            $this->setQtaLimite($jsonObj->qtaLimite);

        if (isset($jsonObj->formato))
            $this->setFormato($jsonObj->formato);

        if (isset($jsonObj->sconto1))
            $this->setSconto1($jsonObj->sconto1);

        if (isset($jsonObj->sconto2))
            $this->setSconto2($jsonObj->sconto2);

        if (isset($jsonObj->sconto3))
            $this->setSconto3($jsonObj->sconto3);

        if (isset($jsonObj->ricarico))
            $this->setRicarico($jsonObj->ricarico);

        if (isset($jsonObj->dalNetto))
            $this->setDalNetto($jsonObj->dalNetto);

        if (isset($jsonObj->arrotondamento))
            $this->setArrotondamento($jsonObj->arrotondamento);

        if (isset($jsonObj->punteggio))
            $this->setPunteggio($jsonObj->punteggio);

        if (isset($jsonObj->prezzoNetto))
            $this->setPrezzoNetto($jsonObj->prezzoNetto);

        if (isset($jsonObj->prezzoNettoIvato))
            $this->setPrezzoNettoIvato($jsonObj->prezzoNettoIvato);

        if (isset($jsonObj->prezzo))
            $this->setPrezzo($jsonObj->prezzo);

        if (isset($jsonObj->prezzoIvato))
            $this->setPrezzoIvato($jsonObj->prezzoIvato);

        if (isset($jsonObj->aliquotaIva))
            $this->setAliquotaIva($jsonObj->aliquotaIva);

        if (isset($jsonObj->proteggiListino))
            $this->setProteggiListino($jsonObj->proteggiListino);

        if (isset($jsonObj->prezzoConsigliato))
            $this->setPrezzoConsigliato($jsonObj->prezzoConsigliato);

        if (isset($jsonObj->listino))
            $this->setListino(Listino::fromJson($jsonObj->listino, $this->_xapiClient));

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));

        if (isset($jsonObj->articolo))
            $this->setArticolo(Articolo::fromJson($jsonObj->articolo, $this->_xapiClient));

        if (isset($jsonObj->listinoRif))
            $this->setListinoRif(Listino::fromJson($jsonObj->listinoRif, $this->_xapiClient));

        if (isset($jsonObj->unitaMisura))
            $this->setUnitaMisura(UnitaMisura::fromJson($jsonObj->unitaMisura, $this->_xapiClient));

        if (isset($jsonObj->valuta))
            $this->setValuta(Valuta::fromJson($jsonObj->valuta, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'listiniPrezzo';
    }

    // endregion

}