<?php

namespace Mediadevs\StrictPHP\Analysers\Options;

use Mediadevs\StrictPHP\Report;
use Mediadevs\StrictPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturn
 * @package Mediadevs\StrictPHP\Analysers\Options
 */
class AnalyseReturn extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the return statements from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
