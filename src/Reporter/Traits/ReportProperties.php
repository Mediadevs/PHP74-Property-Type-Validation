<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Trait ReportProperties.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
trait ReportProperties
{
    /**
     * This method will display generate a report for untyped properties.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public function untyped(string $name, string $type): string
    {
        $str = 'Missing property type for "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * This method will display generate a report for mistyped properties.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public function mistyped(string $name, string $type): string
    {
        $str = 'Invalid property type for "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }
}
