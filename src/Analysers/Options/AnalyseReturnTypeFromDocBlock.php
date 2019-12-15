<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturnTypeFromDocBlock.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseReturnTypeFromDocBlock extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analyses the docblock to determine whether the return type is valid.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
