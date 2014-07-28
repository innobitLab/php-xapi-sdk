<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Clients;

use XAPISdk\Data\BusinessObjects\ImpegnatoArticolo;

class ImpegnatiArticoloClient extends AXAPIBaseClient {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function getResourceName() {
        return ImpegnatoArticolo::getResourceName();
    }

    public function getBusinessObjectClassName() {
        return ImpegnatoArticolo::CLASS_NAME;
    }

    // endregion

}