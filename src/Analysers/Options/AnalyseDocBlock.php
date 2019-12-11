<?php

namespace Mediadevs\StrictPHP\Analysers\Options;

use Mediadevs\StrictPHP\Report;
use Mediadevs\StrictPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseDocBlock
 * @package Mediadevs\StrictPHP\Analysers\Options
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
