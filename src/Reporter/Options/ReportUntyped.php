<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\Traits\ReportLocation;

/**
 * Class ReportUntyped.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportUntyped
{
    use ReportLocation;

    /**
     * Generating a message when a parameter is untyped.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     * @param string $file
     * @param int    $line
     * @param int    $column
     *
     * @return string
     */
    public static function untypedParameter(
        string $name,
        string $type,
        string $parameter,
        string $file,
        int $line,
        int $column
    ): string
    {
        $str = 'Missing parameter type for parameter "%s" of function "%s", parameter must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$parameter, $name, $type]);
    }

    /**
     * Generating a message when a return is untyped.
     *
     * @param string $name
     * @param string $type
     * @param string $file
     * @param int    $line
     * @param int    $column
     *
     * @return string
     */
    public static function untypedReturn(string $name, string $type, string $file, int $line, int $column): string
    {
        $str = 'Missing return type for "%s", return must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a property is untyped.
     *
     * @param string $name
     * @param string $type
     * @param string $file
     * @param int    $line
     * @param int    $column
     *
     * @return string
     */
    public static function untypedProperty(string $name, string $type, string $file, int $line, int $column): string
    {
        $str = 'Missing property type for "%s", property must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$name, $type]);
    }
}
