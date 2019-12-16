<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseMagicMethods.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseMagicMethods extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the magic methods from a class and determines whether the types are valid.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
