<?php

namespace Mediadevs\StrictlyPHP\Analyser;

use Mediadevs\StrictlyPHP\Report;

class Analysis
{
    /**
     * All the report / issues will be parsed through this class.
     *
     * @var Report
     */
    private Report $report;

    /**
     * Analysis constructor.
     */
    public function __construct()
    {
        $this->report = new Report();
    }

    /**
     * Analysing the code based upon the given filters.
     *
     * @param string $code
     * @param array  $filters
     *
     * @return Report
     */
    public function analyse(string $code, array $filters = array()): Report
    {
        return $this->report;
    }
}
