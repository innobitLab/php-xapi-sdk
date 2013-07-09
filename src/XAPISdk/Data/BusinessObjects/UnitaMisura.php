<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class UnitaMisura extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_sigla;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setSigla($sigla) {
        $this->_sigla = $sigla;
    }

    public function getSigla() {
        return $this->_sigla;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'sigla' => $this->serializedField($this->_sigla));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->sigla))
            $this->setSigla($jsonObj->sigla);
    }

    public static function getResourceName() {
        return 'unitaMisura';
    }

    // endregion

}