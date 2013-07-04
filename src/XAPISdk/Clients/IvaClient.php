<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Clients;

use XAPISdk\Data\BusinessObjects\Iva;

class IvaClient extends AXAPIBaseClient {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function getResourceName() {
        return Iva::getResourceName();
    }

    public function getBusinessObjectClassName() {
        return Iva::CLASS_NAME;
    }

    // endregion

}