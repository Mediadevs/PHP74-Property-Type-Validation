<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalysePropertyType.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalysePropertyType extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the property type and determines whether the return type is valid.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
