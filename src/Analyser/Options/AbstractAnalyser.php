<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AbstractAnalyser.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
abstract class AbstractAnalyser
{
    /**
     * All the issues will be registered in this report instance.
     *
     * @var \Mediadevs\StrictlyPHP\Report
     */
    protected Report $report;

    /**
     * AbstractAnalyser constructor.
     */
    public function __construct()
    {
        $this->report = new Report();
    }

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param string $code
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    abstract public function analyse(string $code): ?Report;
}