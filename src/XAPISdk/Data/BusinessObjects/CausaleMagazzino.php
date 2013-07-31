<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class CausaleMagazzino extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    private $_nome;
    private $_moltiplicatore;
    private $_indice;
    private $_tipoCausale;

    // endregion

    // region -- GETTERS/SETTERS --

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

    public function setMoltiplicatore($moltiplicatore) {
        $this->_moltiplicatore = $moltiplicatore;
    }

    public function getMoltiplicatore() {
        return $this->_moltiplicatore;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'moltiplicatore' => $this->serializedField($this->_moltiplicatore),
            'indice' => $this->serializedField($this->_indice),
            'tipoCausale' => $this->serializedField($this->_tipoCausale));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->moltiplicatore))
            $this->setMoltiplicatore($jsonObj->moltiplicatore);

        if (isset($jsonObj->indice))
            $this->setIndice($jsonObj->indice);

        if (isset($jsonObj->tipoCausale))
            $this->setTipoCausale(TipoCausale::fromJson($jsonObj->tipoCausale, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'causaliMagazzino';
    }

    // endregion

}