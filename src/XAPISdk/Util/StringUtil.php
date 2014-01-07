<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Util;

class StringUtil {

    // region -- CONSTANTS --
    // endregion

    // region -- MEMBERS --
    // endregion

    // region -- GETTERS/SETTERS --
    // endregion

    // region -- METHODS --

    public static function startsWith($haystack, $needle) {
        return !strncmp($haystack, $needle, strlen($needle));
    }

    public static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    public static function escapeCharInString($string, $charToEscape) {
        return str_replace($charToEscape, '\\' . $charToEscape, $string);
    }

    // endregion

}