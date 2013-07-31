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
use XAPISdk\Data\BusinessObjects\Vettore;

class VettoriClient extends AXAPIBaseClient {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function getResourceName() {
        return Vettore::getResourceName();
    }

    public function getBusinessObjectClassName() {
        return Vettore::CLASS_NAME;
    }

    // endregion

}