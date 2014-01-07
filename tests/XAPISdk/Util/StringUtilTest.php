<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

require_once __DIR__ . '/../../bootstrap.php';

class StringUtilTest extends PHPUnit_Framework_TestCase {

    public function test_escapeString() {
        $originalString = 'Via Tiepolo, 7';
        $expected = 'Via Tiepolo\, 7';

        $this->assertEquals($expected, \XAPISdk\Util\StringUtil::escapeCharInString($originalString, ','));
    }

}
