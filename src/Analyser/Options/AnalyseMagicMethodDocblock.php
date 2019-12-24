<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AnalyseMagicMethodDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseMagicMethodDocblock extends AbstractAnalyser
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