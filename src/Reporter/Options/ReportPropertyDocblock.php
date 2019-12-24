<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportProperties;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportDocblock;

/**
 * Class ReportPropertyDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class ReportPropertyDocblock extends AbstractReport
{
    use ReportDocblock;
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