<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Data\BusinessObjects;

class ImpegnatoArticolo extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_impegnato;
    protected $_articolo;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setArticolo($articolo) {
        $this->_articolo = $articolo;
    }

    public function getArticolo() {
        $res = $this->_articolo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setImpegnato($impegnato) {
        $this->_impegnato = $impegnato;
    }

    public function getImpegnato() {
        return $this->_impegnato;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('impegnato' => $this->serializedField($this->_impegnato),
            'articolo' => $this->serializedField($this->_articolo));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->impegnato))
            $this->setImpegnato($jsonObj->impegnato);

        if (isset($jsonObj->articolo))
            $this->setArticolo(Articolo::fromJson($jsonObj->articolo, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'impegnatiArticolo';
    }

    // endregion

}