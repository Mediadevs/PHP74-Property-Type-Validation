<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportReturn;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportDocblock;
use Mediadevs\StrictlyPHP\Reporter\Traits\ReportParameter;

/**
 * Class ReportMagicMethodDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class ReportMagicMethodDocblock extends AbstractReport
{
    use ReportReturn;
    use ReportDocblock;
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