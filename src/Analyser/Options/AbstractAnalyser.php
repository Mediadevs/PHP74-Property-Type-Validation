<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Reporter\FileAnalysisResults;

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
     * @var FileAnalysisResults
     */
    protected FileAnalysisResults $issue;

    /**
     * AbstractAnalyser constructor.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->issue = new FileAnalysisResults($file);
    }

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param \PhpParser\Node $node
     * @param array           $filters
     *
     * @return FileAnalysisResults
     */
    abstract public function analyse(Node $node, array $filters): ?FileAnalysisResults;
}
