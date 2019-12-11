<?php

namespace Mediadevs\StrictPHP\Analysers\Options;

use Mediadevs\StrictPHP\Report;
use Mediadevs\StrictPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseMethods.
 *
 * @package Mediadevs\StrictPHP\Analysers\Options
 */
class AnalyseMethods extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the methods from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
