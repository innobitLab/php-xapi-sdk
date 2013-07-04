<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Security;

class SecurityManager {

    // region -- CONSTANTS --

    const PARAM_APIKEY = 'apiKey';
    const PARAM_TIMESTAMP = 'timestamp';

    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function __construct() {

    }

    public function calculateSignatureForRequest($resourcePath, $publicKey, $privateKey, $timestamp) {
        $clearSignature = $this->calculateCleanSignature($resourcePath, $publicKey, $timestamp);

        return $this->hashSignature($clearSignature, $privateKey);
    }

    private function calculateCleanSignature($resourcePath, $publicKey, $timestamp) {
        if ($timestamp === null) {
            $timestamp = new \DateTime();
            $timestamp = $timestamp->format('YmdHis');
        }

        return $resourcePath . '?' .
            self::PARAM_APIKEY . '=' . $publicKey . '&' .
            self::PARAM_TIMESTAMP . '=' . $timestamp;
    }

    private function hashSignature($toSign, $privateKey) {
        return hash_hmac('sha256', $toSign, $privateKey);
    }

    // endregion

}