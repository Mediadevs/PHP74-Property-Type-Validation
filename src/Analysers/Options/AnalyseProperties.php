<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseProperties.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
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
