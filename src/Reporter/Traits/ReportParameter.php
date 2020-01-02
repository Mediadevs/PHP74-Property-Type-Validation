<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Trait ReportParameter.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
trait ReportParameter
{
    /**
     * This method will display generate a report for untyped parameters in a (called) function or method.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public function untyped(string $name, string $type, string $parameter): string
    {
        $str = 'Missing parameter type for "%s" of "%s" must be of type "%s"';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }

    /**
     * This method will display generate a report for mistyped parameters in a (called) function or method.
     *
     * @param string $name
     * @param string $type
     * @param string $parameter
     *
     * @return string
     */
    public function mistyped(string $name, string $type, string $parameter): string
    {
        $str = 'Invalid parameter type type for "%s" of "%s" must be of type "%s"';

        return (string) sprintf($str, [$parameter, $name, $type]);
    }
}
