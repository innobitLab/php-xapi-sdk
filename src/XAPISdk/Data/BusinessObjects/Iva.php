<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Iva extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_codice;
    protected $_nome;
    protected $_aliquota;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAliquota($aliquota) {
        $this->_aliquota = $aliquota;
    }

    public function getAliquota() {
        return $this->_aliquota;
    }

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'codice' => $this->serializedField($this->_codice),
            'aliquota' => $this->serializedField($this->_aliquota));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->aliquota))
            $this->setAliquota($jsonObj->aliquota);
    }

    public static function getResourceName() {
        return 'iva';
    }

    // endregion

}