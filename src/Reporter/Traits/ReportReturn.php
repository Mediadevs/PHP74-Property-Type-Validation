<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Trait ReportReturn.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
trait ReportReturn
{
    /**
     * This method will display generate a report for untyped returns.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public function untyped(string $name, string $type): string
    {
        $str = 'Missing return type for "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * This method will display generate a report for mistyped returns.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    public function mistyped(string $name, string $type): string
    {
        $str = 'Invalid return type for "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }
}
