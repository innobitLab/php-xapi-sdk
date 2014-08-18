<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Data\BusinessObjects;

class GiacenzaPerDeposito extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_giacenza;
    protected $_deposito;
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

    public function setDeposito($deposito) {
        $this->_deposito = $deposito;
    }

    public function getDeposito() {
        $res = $this->_deposito;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setGiacenza($giacenza) {
        $this->_giacenza = $giacenza;
    }

    public function getGiacenza() {
        return $this->_giacenza;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('giacenza' => $this->serializedField($this->_giacenza),
            'articolo' => $this->serializedField($this->_articolo),
            'deposito' => $this->serializedField($this->_deposito));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {
        if (isset($jsonObj->giacenza))
            $this->setGiacenza($jsonObj->giacenza);

        if (isset($jsonObj->articolo))
            $this->setArticolo(Articolo::fromJson($jsonObj->articolo, $this->_xapiClient));

        if (isset($jsonObj->deposito))
            $this->setDeposito(Deposito::fromJson($jsonObj->deposito, $this->_xapiClient));
    }

    public static function getResourceName() {
        return 'giacenzePerDeposito';
    }

    // endregion

}