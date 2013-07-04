<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Data\BusinessObjects;

use XAPISdk\Clients\IXAPIClient;

interface IBusinessObject {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --

    public function setDataCreazione($dataCreazione);
    public function getDataCreazione();

    public function setDataUltimaModifica($dataUltimaModifica);
    public function getDataUltimaModifica();

    public function setId($id);
    public function getId();

    public function setHref($href);
    public function getHref();

    public function setLazy($lazy);
    public function getLazy();

    // endregion

    // region -- METHODS --

    public function __construct(IXAPIClient $client = null);

    public static function fromJson($jsonObj, IXAPIClient $client = null);

    public static function getClassName();

    public static function getResourceName();

    public function toJson();

    // endregion

}