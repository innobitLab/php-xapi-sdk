<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Valuta extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_simbolo;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setSimbolo($simbolo) {
        $this->_simbolo = $simbolo;
    }

    public function getSimbolo() {
        return $this->_simbolo;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'simbolo' => $this->serializedField($this->_simbolo));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if(isset($jsonObj->simbolo))
            $this->setSimbolo($jsonObj->simbolo);
    }

    public static function getResourceName() {
        return 'valute';
    }

    // endregion

}