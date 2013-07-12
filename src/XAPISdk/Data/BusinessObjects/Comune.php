<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Comune extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_codice;
    protected $_cap;
    protected $_codiceIstat;
    protected $_provincia;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setCap($cap) {
        $this->_cap = $cap;
    }

    public function getCap() {
        return $this->_cap;
    }

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setCodiceIstat($codiceIstat) {
        $this->_codiceIstat = $codiceIstat;
    }

    public function getCodiceIstat() {
        return $this->_codiceIstat;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setProvincia($provincia) {
        $this->_provincia = $provincia;
    }

    public function getProvincia() {
        return $this->_provincia;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'codice' => $this->serializedField($this->_codice),
            'cap' => $this->serializedField($this->_cap),
            'codiceIstat' => $this->serializedField($this->_codiceIstat),
            'provincia' => $this->serializedField($this->_provincia));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->cap))
            $this->setCap($jsonObj->cap);

        if (isset($jsonObj->codiceIstat))
            $this->setCodiceIstat($jsonObj->codiceIstat);

        if (isset($jsonObj->provincia))
            $this->setProvincia(Provincia::fromJson($jsonObj->provincia, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'comuni';
    }

    // endregion

}