<?php

namespace Mediadevs\StrictlyPHP\Analysers;

use Mediadevs\StrictlyPHP\Report;

/**
 * Interface AnalyserInterface.
 *
 * @package Mediadevs\StrictlyPHP\Analysers
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
