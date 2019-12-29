<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * TODO: Create this report class.
 *
 * Class ReportAssignable.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportAssignable extends AbstractReport
{
    /**
     * Creating a report based upon the issue, each report has a can import a specific set of traits
     * to match it's own properties.
     *
     * @return string
     */
    public static function create(): string
    {
        return '';
    }
}