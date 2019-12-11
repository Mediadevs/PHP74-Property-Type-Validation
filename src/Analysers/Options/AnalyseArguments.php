<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use \Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseArguments
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
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
