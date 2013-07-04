<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Log;

class HtmlLogger implements ILog {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public function info($message) {
        print($message . '<br>');
    }

    public function error($message, \Exception $exception) {
        print($message . '<br>');
        print('<pre>');
        print_r($exception);
        print('</pre><br>');
    }

    public function debug($message) {
        print($message . '<br>');
    }

    // endregion

}