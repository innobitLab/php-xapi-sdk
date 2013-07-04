<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Contatto extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    private $_cognome;
    private $_nome;
    private $_ufficio;
    private $_ufficio2;
    private $_fax;
    private $_cellulare;
    private $_cellulare2;
    private $_email;
    private $_soggetto;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setCellulare($cellulare) {
        $this->_cellulare = $cellulare;
    }

    public function getCellulare() {
        return $this->_cellulare;
    }

    public function setCellulare2($cellulare2) {
        $this->_cellulare2 = $cellulare2;
    }

    public function getCellulare2() {
        return $this->_cellulare2;
    }

    public function setCognome($cognome) {
        $this->_cognome = $cognome;
    }

    public function getCognome() {
        return $this->_cognome;
    }

    public function setEmail($email) {
        $this->_email = $email;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function setFax($fax) {
        $this->_fax = $fax;
    }

    public function getFax() {
        return $this->_fax;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        $res = $this->_soggetto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setUfficio($ufficio) {
        $this->_ufficio = $ufficio;
    }

    public function getUfficio() {
        return $this->_ufficio;
    }

    public function setUfficio2($ufficio2) {
        $this->_ufficio2 = $ufficio2;
    }

    public function getUfficio2() {
        return $this->_ufficio2;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('cognome' => $this->serializedField($this->_cognome),
            'nome' => $this->serializedField($this->_nome),
            'ufficio' => $this->serializedField($this->_ufficio),
            'ufficio2' => $this->serializedField($this->_ufficio2),
            'fax' => $this->serializedField($this->_fax),
            'cellulare' => $this->serializedField($this->_cellulare),
            'cellulare2' => $this->serializedField($this->_cellulare2),
            'email' => $this->serializedField($this->_email),
            'soggetto' => $this->serializedField($this->_soggetto));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->cognome))
            $this->setCognome($jsonObj->cognome);

        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->ufficio))
            $this->setUfficio($jsonObj->ufficio);

        if (isset($jsonObj->ufficio2))
            $this->setUfficio2($jsonObj->ufficio2);

        if (isset($jsonObj->fax))
            $this->setFax($jsonObj->fax);

        if (isset($jsonObj->cellulare))
            $this->setCellulare($jsonObj->cellulare);

        if (isset($jsonObj->cellulare2))
            $this->setCellulare2($jsonObj->cellulare2);

        if (isset($jsonObj->email))
            $this->setEmail($jsonObj->email);

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'contatti';
    }

    // endregion

}