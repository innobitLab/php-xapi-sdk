<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Clients;

use XAPISdk\Data\BusinessObjects\Divisione;
use XAPISdk\Data\BusinessObjects\DocumentoTestata;
use XAPISdk\Data\BusinessObjects\ModalitaTrasporto;

class ModalitaTrasportoClient extends AXAPIBaseClient {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function getResourceName() {
        return ModalitaTrasporto::getResourceName();
    }

    public function getBusinessObjectClassName() {
        return ModalitaTrasporto::CLASS_NAME;
    }

    // endregion

}