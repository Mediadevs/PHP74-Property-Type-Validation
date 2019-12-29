<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportReturn;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportParameter;

/**
 * TODO: Create this report class.
 *
 * Class ReportCallable.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class ReportCallable extends AbstractReport
{
    use ReportParameter;

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