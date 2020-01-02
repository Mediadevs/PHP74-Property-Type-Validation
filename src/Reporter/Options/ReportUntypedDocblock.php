<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\Traits\ReportLocation;

/**
 * Class ReportUntypedDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportUntypedDocblock
{
    use ReportLocation;

    /**
     * Generating a message when a parameter is untyped in the docblock.
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
        $str = 'Missing type for @param %s in the docblock of function "%s", @param must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$parameter, $name, $type]);
    }

    /**
     * Generating a message when a return is untyped in the docblock.
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
        $str = 'Missing type for @return in the docblock of function "%s", @return must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a property is untyped in the docblock.
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
        $str = 'Missing type for @var in the docblock of property "%s", @var must be of type "%s".';
        $str .= self::location($file, $line, $column);

        return (string) sprintf($str, [$name, $type]);
    }
}
