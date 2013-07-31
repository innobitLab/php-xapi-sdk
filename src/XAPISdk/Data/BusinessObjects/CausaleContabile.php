<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class CausaleContabile extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    private $_nome;
    private $_attivoPassivo;
    private $_indice;
    private $_dareAvere;
    private $_tipoCausale;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAttivoPassivo($attivoPassivo) {
        $this->_attivoPassivo = $attivoPassivo;
    }

    public function getAttivoPassivo() {
        return $this->_attivoPassivo;
    }

    public function setDareAvere($dareAvere) {
        $this->_dareAvere = $dareAvere;
    }

    public function getDareAvere() {
        return $this->_dareAvere;
    }

    public function setIndice($indice) {
        $this->_indice = $indice;
    }

    public function getIndice() {
        return $this->_indice;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setTipoCausale($tipoCausale) {
        $this->_tipoCausale = $tipoCausale;
    }

    public function getTipoCausale() {
        $res = $this->_tipoCausale;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'attivoPassivo' => $this->serializedField($this->_attivoPassivo),
            'indice' => $this->serializedField($this->_indice),
            'dareAvere' => $this->serializedField($this->_dareAvere),
            'tipoCausale' => $this->serializedField($this->_tipoCausale));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->attivoPassivo))
            $this->setAttivoPassivo($jsonObj->attivoPassivo);

        if (isset($jsonObj->indice))
            $this->setIndice($jsonObj->indice);

        if (isset($jsonObj->dareAvere))
            $this->setDareAvere($jsonObj->dareAvere);

        if (isset($jsonObj->tipoCausale))
            $this->setTipoCausale(TipoCausale::fromJson($jsonObj->tipoCausale, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'causaliContabile';
    }

    // endregion

}