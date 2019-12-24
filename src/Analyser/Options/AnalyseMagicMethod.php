<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AnalyseMagicMethod.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseMagicMethod extends AbstractAnalyser
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