<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Agente extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_codice;
    protected $_denominazione;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setDenominazione($denominazione) {
        $this->_denominazione = $denominazione;
    }

    public function getDenominazione() {
        return $this->_denominazione;
    }


    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'codice' => $this->serializedField($this->_codice),
            'denominazione' => $this->serializedField($this->_denominazione));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->denominazione))
            $this->setDenominazione($jsonObj->denominazione);
    }

    public static function getResourceName() {
        return 'agenti';
    }

    // endregion

}