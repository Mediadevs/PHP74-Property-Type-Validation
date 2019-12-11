<?php

namespace Mediadevs\PHPStrictlyTyped\Analysers;

use Mediadevs\PHPStrictlyTyped\Report;

/**
 * Interface AnalyserInterface.
 *
 * @package Mediadevs\PHPStrictlyTyped\Analysers
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
