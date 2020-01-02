<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * Class ReportUntypedDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportUntypedDocblock extends AbstractReport
{
    /**
     * Generating a message when a parameter is untyped in the docblock.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public static function untypedParameter(string $name, string $type, string $parameter): string
    {
        $str = 'Missing type for @param %s in the docblock of function "%s", @param must be of type "%s".';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }
    /**
     * Generating a message when a return is untyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function untypedReturn(string $name, string $type): string
    {
        $str = 'Missing type for @return in the docblock of function "%s", @return must be of type "%s".';
        return (string) sprintf($str, [$name, $type]);
    }
    /**
     * Generating a message when a property is untyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function untypedProperty(string $name, string $type): string
    {
        $str = 'Missing type for @var in the docblock of property "%s", @var must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }
}
