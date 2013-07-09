<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Configuration;

use XAPISdk\Log\ILog;

class XAPISdkConfiguration {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --

    private $_xapiUri;
    private $_xapiPublicKey;
    private $_xapiPrivateKey;
    private $_logger;

    // endregion

    // region -- GETTERS/SETTERS --

    public function getLogger() {
        return $this->_logger;
    }

    public function getXapiPrivateKey() {
        return $this->_xapiPrivateKey;
    }

    public function getXapiPublicKey() {
        return $this->_xapiPublicKey;
    }

    public function getXapiUri() {
        return $this->_xapiUri;
    }

    // endregion

    // region -- METHODS --

    public function __construct($xapiUri, $xapiPublicKey, $xapiPrivateKey, ILog $logger = null) {
        $this->_xapiUri = $xapiUri;
        $this->_xapiPublicKey = $xapiPublicKey;
        $this->_xapiPrivateKey = $xapiPrivateKey;

        if ($logger != null) {
            if (!($logger instanceof ILog))
                throw new ConfigurationException('Logger must be an instance of ILog');

            $this->_logger = $logger;
        }
    }

    // endregion

}