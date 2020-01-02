<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Class ReportLocation.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
Trait ReportLocation
{
    /**
     * This method will display generate a report for the location of the issue, this can be useful to the user
     * to know where the issues is located.
     *
     * @param string $file
     * @param int    $line
     * @param int    $column
     *
     * @return string
     */
    public function location(string $file, int $line, int $column): string
    {
        $str = 'in file "%s" at line "%s" column "%s".';

        return (string) sprintf($str, [$file, $line, $column]);
    }
}
