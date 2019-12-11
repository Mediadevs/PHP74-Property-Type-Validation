<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseMagicMethods
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseMagicMethods extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the magic methods from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
