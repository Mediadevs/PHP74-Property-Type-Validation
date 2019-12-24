<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AnalyseMethodDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseMethodDocblock extends AbstractAnalyser
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