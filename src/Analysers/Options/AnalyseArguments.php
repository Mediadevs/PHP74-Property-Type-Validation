<?php

namespace Mediadevs\StrictPHP\Analysers\Options;

use \Mediadevs\StrictPHP\Report;
use Mediadevs\StrictPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseArguments
 * @package Mediadevs\StrictPHP\Analysers\Options
 */
class AnalyseArguments extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the arguments from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
