<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturnMethod.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseReturnMethod extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the hinted return type of the method from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
