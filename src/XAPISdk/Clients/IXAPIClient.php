<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Clients;

use XAPISdk\Configuration\XAPISdkConfiguration;
use XAPISdk\Data\BusinessObjects\IBusinessObject;

interface IXAPIClient {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --

    public function getXapiSdkConfiguration();

    // endregion

    // region -- METHODS --

    public function __construct(XAPISdkConfiguration $conf);

    public function get($id);
    public function update(IBusinessObject $obj);
    public function add(IBusinessObject $obj);
    public function delete($id);
    public function listAll(array $kvpFilter = null);

    // endregion

}