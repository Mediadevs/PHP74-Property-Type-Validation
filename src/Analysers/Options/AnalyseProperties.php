<?php

namespace Mediadevs\StrictPHP\Analysers\Options;

use Mediadevs\StrictPHP\Report;
use Mediadevs\StrictPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseProperties
 * @package Mediadevs\StrictPHP\Analysers\Options
 */
class AnalyseProperties extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the properties from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
