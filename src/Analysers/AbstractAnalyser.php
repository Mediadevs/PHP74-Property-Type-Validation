<?php

namespace Mediadevs\StrictlyPHP\Analysers;

use Mediadevs\StrictlyPHP\Report;

/**
 * Class AbstractAnalyser.
 *
 * @package Mediadevs\StrictlyPHP\Analysers
 */
abstract class AbstractAnalyser
{
    /**
     * The subject which will be used for parsing.
     *
     * @var string
     */
    protected string $code;

    /**
     * The IssueCollection instance for handling the detected issues.
     *
     * @var Report
     */
    protected Report $report;

    /**
     * Analyser constructor.
     *
     * Type hinting properties for the analyser class.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
        $this->report = new Report();
    }
}
