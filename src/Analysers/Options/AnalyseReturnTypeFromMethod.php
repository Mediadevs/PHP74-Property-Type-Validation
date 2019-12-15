<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturnTypeFromMethod.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseReturnTypeFromMethod extends AbstractAnalyser implements AnalyserInterface
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
