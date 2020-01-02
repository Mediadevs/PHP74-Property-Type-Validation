<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\Traits\ReportLocation;

/**
 * Class ReportMistyped.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportMistyped
{
    /**
     * Generating a message when a parameter is mistyped.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public static function mistypedParameter(string $name, string $type, string $parameter): string
    {
        $str = 'Invalid parameter type for parameter "%s" of function "%s", parameter must be of type "%s".';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }

    /**
     * Generating a message when a return is mistyped.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function mistypedReturn(string $name, string $type): string
    {
        $str = 'Invalid return type for "%s", return must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a property is mistyped.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function mistypedProperty(string $name, string $type): string
    {
        $str = 'Invalid property type for "%s", property must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }
}
