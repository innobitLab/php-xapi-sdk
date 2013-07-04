<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Banca extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_filiale;
    protected $_indirizzo;
    protected $_cap;
    protected $_piazza;
    protected $_provincia;
    protected $_abi;
    protected $_cab;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setAbi($abi) {
        $this->_abi = $abi;
    }

    public function getAbi() {
        return $this->_abi;
    }

    public function setCab($cab) {
        $this->_cab = $cab;
    }

    public function getCab() {
        return $this->_cab;
    }

    public function setCap($cap) {
        $this->_cap = $cap;
    }

    public function getCap() {
        return $this->_cap;
    }

    public function setFiliale($filiale) {
        $this->_filiale = $filiale;
    }

    public function getFiliale() {
        return $this->_filiale;
    }

    public function setIndirizzo($indirizzo) {
        $this->_indirizzo = $indirizzo;
    }

    public function getIndirizzo() {
        return $this->_indirizzo;
    }

    public function setPiazza($piazza) {
        $this->_piazza = $piazza;
    }

    public function getPiazza() {
        return $this->_piazza;
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
            'filiale' => $this->serializedField($this->_filiale),
            'indirizzo' => $this->serializedField($this->_indirizzo),
            'cap' => $this->serializedField($this->_cap),
            'piazza' => $this->serializedField($this->_piazza),
            'provincia' => $this->serializedField($this->_provincia),
            'abi' => $this->serializedField($this->_abi),
            'cab' => $this->serializedField($this->_cab));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->filiale))
            $this->setFiliale($jsonObj->filiale);

        if (isset($jsonObj->indirizzo))
            $this->setIndirizzo($jsonObj->indirizzo);

        if (isset($jsonObj->cap))
            $this->setCap($jsonObj->cap);

        if (isset($jsonObj->piazza))
            $this->setPiazza($jsonObj->piazza);

        if (isset($jsonObj->provincia))
            $this->setProvincia($jsonObj->provincia);

        if (isset($jsonObj->abi))
            $this->setAbi($jsonObj->abi);

        if (isset($jsonObj->cab))
            $this->setCab($jsonObj->cab);
    }

    public static function getResourceName() {
        return 'banche';
    }

    // endregion

}