<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseArgumentsFromMethod.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseArgumentsFromMethod extends AbstractAnalyser implements AnalyserInterface
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
