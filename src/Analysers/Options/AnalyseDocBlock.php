<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers\Options;

use Mediadevs\PHPStrictlyTyped\Report;
use Mediadevs\PHPStrictlyTyped\Analysers\AbstractAnalyser;
use Mediadevs\PHPStrictlyTyped\Analysers\AnalyserInterface;

/**
 * Class AnalyseDocBlock
 * @package Mediadevs\PHPStrictlyTyped\Analysers\Options
 */
class AnalyseDocBlock extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the DocBlocks from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        return $this->report;
    }
}
