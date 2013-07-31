<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class TipoDocumento extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_codiceNumeratore;
    protected $_moltiplicatore;

    protected $_causaleContabile;
    protected $_causaleMagazzino;
    protected $_causaleMagazzino2;
    protected $_tipoSoggetto;

    // endregion

    // region -- GETTERS/SETTERS --

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

    public function setCodiceNumeratore($codiceNumeratore) {
        $this->_codiceNumeratore = $codiceNumeratore;
    }

    public function getCodiceNumeratore() {
        return $this->_codiceNumeratore;
    }

    public function setMoltiplicatore($moltiplicatore) {
        $this->_moltiplicatore = $moltiplicatore;
    }

    public function getMoltiplicatore() {
        return $this->_moltiplicatore;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
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

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'codiceNumeratore' => $this->serializedField($this->_codiceNumeratore),
            'moltiplicatore' => $this->serializedField($this->_moltiplicatore),
            'causaleContabile' => $this->serializedField($this->_causaleContabile),
            'causaleMagazzino' => $this->serializedField($this->_causaleMagazzino),
            'causaleMagazzino2' => $this->serializedField($this->_causaleMagazzino2),
            'tipoSoggetto' => $this->serializedField($this->_tipoSoggetto));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->descrizione))
            $this->setCodiceNumeratore($jsonObj->codiceNumeratore);

        if (isset($jsonObj->moltiplicatore))
            $this->setMoltiplicatore($jsonObj->moltiplicatore);

        if (isset($jsonObj->causaleContabile))
            $this->setCausaleContabile(CausaleContabile::fromJson($jsonObj->causaleContabile, $this->_xapiClient));

        if (isset($jsonObj->causaleMagazzino))
            $this->setCausaleMagazzino(CausaleMagazzino::fromJson($jsonObj->causaleMagazzino, $this->_xapiClient));

        if (isset($jsonObj->causaleMagazzino2))
            $this->setCausaleMagazzino2(CausaleMagazzino::fromJson($jsonObj->causaleMagazzino2, $this->_xapiClient));

        if (isset($jsonObj->tipoSoggetto))
            $this->setTipoSoggetto(TipoSoggetto::fromJson($jsonObj->tipoSoggetto, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'tipiDocumento';
    }

    // endregion

}