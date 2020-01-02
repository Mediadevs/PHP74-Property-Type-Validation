<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * Class ReportMistypedDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportMistypedDocblock extends AbstractReport
{
    /**
     * Generating a message when a parameter is mistyped in the docblock.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public static function mistypedParameter(string $name, string $type, string $parameter): string
    {
        $str = 'Invalid type for @param %s in the docblock of function "%s", @param must be of type "%s".';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }
    /**
     * Generating a message when a return is mistyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function mistypedReturn(string $name, string $type): string
    {
        $str = 'Invalid type for @return in the docblock of function "%s", @return must be of type "%s".';
        return (string) sprintf($str, [$name, $type]);
    }
    /**
     * Generating a message when a property is mistyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function mistypedProperty(string $name, string $type): string
    {
        $str = 'Invalid type for @var in the docblock of property "%s", @var must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }
}
