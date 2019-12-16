<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseReturnMethodDocBlock.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseReturnMethodDocBlock extends AbstractAnalyser implements AnalyserInterface
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
