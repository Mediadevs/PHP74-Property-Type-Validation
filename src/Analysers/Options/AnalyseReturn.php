<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturn.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
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
