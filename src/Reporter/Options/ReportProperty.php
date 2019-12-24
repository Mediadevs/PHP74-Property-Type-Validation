<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportProperties;

/**
 * Class ReportProperties.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class ReportProperty extends AbstractReport
{
    use ReportProperties;

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