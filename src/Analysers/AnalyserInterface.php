<?php

namespace Mediadevs\StrictPHP\Analysers;

use Mediadevs\StrictPHP\Report;

/**
 * Interface AnalyserInterface
 * @package Mediadevs\StrictPHP\Analysers
 */
interface AnalyserInterface
{
    /**
     * Analysing the target file and applying the filters for this job.
     *
     * @return Report
     */
    public function analyse(): Report;
}
