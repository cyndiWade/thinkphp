<?php
/**********************************************************\
|                                                          |
|                          hprose                          |
|                                                          |
| Official WebSite: http://www.hprose.com/                 |
|                   http://www.hprose.net/                 |
|                   http://www.hprose.org/                 |
|                                                          |
\**********************************************************/

/**********************************************************\
 *                                                        *
 * HproseFormatter.php                                    *
 *                                                        *
 * hprose formatter library for php5.                     *
 *                                                        *
 * LastModified: Nov 12, 2013                             *
 * Author: Ma Bingyao <andot@hprfc.com>                   *
 *                                                        *
\**********************************************************/

require_once('../ThinkPHP/Library/Vendor/Hprose/HproseIOStream.phpy/HproseIOStream.ph../ThinkPHP/Library/Vendor/Hprose/HproseReader.phpce('../../../../Lib../ThinkPHP/Library/Vendor/Hprose/HproseWriter.phpr.php');
require_once('../../../../Library/HproseWriter.php');

class HproseFormatter {
    public static function serialize(&$var, $simple = false) {
        $stream = new HproseStringStream();
        $hproseWriter = ($simple ? new HproseSimpleWriter($stream) : new HproseWriter($stream));
        $hproseWriter->serialize($var);
        return $stream->toString();
    }
    public static function &unserialize($data, $simple = false) {
        $stream = new HproseStringStream($data);
        $hproseReader = ($simple ? new HproseSimpleReader($stream) : new HproseReader($stream));
        return $hproseReader->unserialize();
    }
}
?>
