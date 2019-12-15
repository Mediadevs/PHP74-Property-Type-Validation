<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseArgumentsFromDocBlock.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseArgumentsFromDocBlock extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the arguments in the docblock from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
