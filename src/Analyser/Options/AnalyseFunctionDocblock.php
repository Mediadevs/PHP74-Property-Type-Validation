<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AnalyseFunctionDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseFunctionDocblock extends AbstractAnalyser
{
    /**
     * @param string $code
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    public function analyse(string $code): ?Report
    {
        return $this->report;
    }
}