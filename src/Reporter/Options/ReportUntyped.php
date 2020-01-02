<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * Class ReportUntyped.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportUntyped extends AbstractReport
{
    /**
     * Generating a message when a parameter is untyped.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public static function untypedParameter(string $name, string $type, string $parameter): string
    {
        $str = 'Missing parameter type for parameter "%s" of function "%s", parameter must be of type "%s".';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }

    /**
     * Generating a message when a return is untyped.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function untypedReturn(string $name, string $type): string
    {
        $str = 'Missing return type for "%s", return must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a property is untyped.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public static function untypedProperty(string $name, string $type): string
    {
        $str = 'Missing property type for "%s", property must be of type "%s".';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Creating a report based upon the issue, each report has a can import a specific set of traits
     * to match it's own properties.
     *
     * @return self
     */
    public function create() : AbstractReport
    {
        // TODO: Implement create() method.
    }
}
