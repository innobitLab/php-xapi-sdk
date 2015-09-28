<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Sede extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_codice;
    protected $_denominazione;
    protected $_indirizzo;
    protected $_cap;
    protected $_comune;
    protected $_provincia;
    protected $_nazione;
    protected $_localita;
    protected $_telefono;
    protected $_telefonoUfficio;
    protected $_cellulare;
    protected $_cellulare2;
    protected $_fax;
    protected $_tipoSede;
    protected $_soggetto;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setCap($cap) {
        $this->_cap = $cap;
    }

    public function getCap() {
        return $this->_cap;
    }

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

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setComune($comune) {
        $this->_comune = $comune;
    }

    public function getComune() {
        return $this->_comune;
    }

    public function setDenominazione($denominazione) {
        $this->_denominazione = $denominazione;
    }

    public function getDenominazione() {
        return $this->_denominazione;
    }

    public function setFax($fax) {
        $this->_fax = $fax;
    }

    public function getFax() {
        return $this->_fax;
    }

    public function setIndirizzo($indirizzo) {
        $this->_indirizzo = $indirizzo;
    }

    public function getIndirizzo() {
        return $this->_indirizzo;
    }

    public function setLocalita($localita) {
        $this->_localita = $localita;
    }

    public function getLocalita() {
        return $this->_localita;
    }

    public function setNazione($nazione) {
        $this->_nazione = $nazione;
    }

    public function getNazione() {
        $res = $this->_nazione;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setProvincia($provincia) {
        $this->_provincia = $provincia;
    }

    public function getProvincia() {
        return $this->_provincia;
    }

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        $res = $this->_soggetto;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setTelefono($telefono) {
        $this->_telefono = $telefono;
    }

    public function getTelefono() {
        return $this->_telefono;
    }

    public function setTelefonoUfficio($telefonoUfficio) {
        $this->_telefonoUfficio = $telefonoUfficio;
    }

    public function getTelefonoUfficio() {
        return $this->_telefonoUfficio;
    }

    public function setTipoSede($tipoSede) {
        $this->_tipoSede = $tipoSede;
    }

    public function getTipoSede() {
        $res = $this->_tipoSede;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {

        $toSerialize = array('codice' => $this->serializedField($this->_codice),
            'denominazione' => $this->serializedField($this->_denominazione),
            'indirizzo' => $this->serializedField($this->_indirizzo),
            'cap' => $this->serializedField($this->_cap),
            'comune' => $this->serializedField($this->_comune),
            'provincia' => $this->serializedField($this->_provincia),
            'nazione' => $this->serializedField($this->_nazione),
            'localita' => $this->serializedField($this->_localita),
            'telefono' => $this->serializedField($this->_telefono),
            'telefonoUfficio' => $this->serializedField($this->_telefonoUfficio),
            'cellulare' => $this->serializedField($this->_cellulare),
            'cellulare2' => $this->serializedField($this->_cellulare2),
            'fax' => $this->serializedField($this->_fax),
            'tipoSede' => $this->serializedField($this->_tipoSede),
            'soggetto' => $this->serializedField($this->_soggetto));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->denominazione))
            $this->setDenominazione($jsonObj->denominazione);

        if (isset($jsonObj->indirizzo))
            $this->setIndirizzo($jsonObj->indirizzo);

        if (isset($jsonObj->cap))
            $this->setCap($jsonObj->cap);

        if (isset($jsonObj->comune))
            $this->setComune($jsonObj->comune);

        if (isset($jsonObj->provincia))
            $this->setProvincia($jsonObj->provincia);

        if (isset($jsonObj->localita))
            $this->setLocalita($jsonObj->localita);

        if (isset($jsonObj->telefono))
            $this->setTelefono($jsonObj->telefono);

        if (isset($jsonObj->telefonoUfficio))
            $this->setTelefonoUfficio($jsonObj->telefonoUfficio);

        if (isset($jsonObj->cellulare))
            $this->setCellulare($jsonObj->cellulare);

        if (isset($jsonObj->cellulare2))
            $this->setCellulare2($jsonObj->cellulare2);

        if (isset($jsonObj->fax))
            $this->setFax($jsonObj->fax);

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));

        if (isset($jsonObj->nazione))
            $this->setNazione(Nazione::fromJson($jsonObj->nazione, $this->_xapiClient));

        if (isset($jsonObj->tipoSede))
            $this->setTipoSede(TipoSede::fromJson($jsonObj->tipoSede, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'sedi';
    }

    // endregion

}