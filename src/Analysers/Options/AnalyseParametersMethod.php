<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseParametersMethod.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseParametersMethod extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the arguments from the method of current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
