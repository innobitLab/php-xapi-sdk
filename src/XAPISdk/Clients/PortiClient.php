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
use XAPISdk\Data\BusinessObjects\Porto;

class PortiClient extends AXAPIBaseClient {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function getResourceName() {
        return Porto::getResourceName();
    }

    public function getBusinessObjectClassName() {
        return Porto::CLASS_NAME;
    }

    // endregion

}