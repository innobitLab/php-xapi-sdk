<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

class Vettore extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_nome;
    protected $_rapporto;
    protected $_sede;
    protected $_soggetto;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setRapporto($rapporto) {
        $this->_rapporto = $rapporto;
    }

    public function getRapporto() {
        return $this->_rapporto;
    }

    public function setSede($sede) {
        $this->_sede = $sede;
    }

    public function getSede() {
        return $this->_sede;
    }

    public function setSoggetto($soggetto) {
        $this->_soggetto = $soggetto;
    }

    public function getSoggetto() {
        return $this->_soggetto;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('nome' => $this->serializedField($this->_nome),
            'rapporto' => $this->serializedField($this->_rapporto),
            'sede' => $this->serializedField($this->_sede),
            'soggetto' => $this->serializedField($this->_soggetto));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->nome))
            $this->setNome($jsonObj->nome);

        if (isset($jsonObj->rapporto))
            $this->setRapporto(Rapporto::fromJson($jsonObj->rapporto, $this->_xapiClient));

        if (isset($jsonObj->sede))
            $this->setSede(Sede::fromJson($jsonObj->sede, $this->_xapiClient));

        if (isset($jsonObj->soggetto))
            $this->setSoggetto(Soggetto::fromJson($jsonObj->soggetto, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'vettori';
    }

    // endregion

}