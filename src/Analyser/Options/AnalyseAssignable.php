<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Reporter\FileAnalysisResults;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseProperties;

/**
 * Class AnalyseAssignable.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseAssignable extends AbstractAnalyser
{
    use AnalyseDocblock;
    use AnalyseProperties;

    /**
     * AnalyseFunction constructor.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        parent::__construct($file);
    }

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param \PhpParser\Node $node
     * @param array           $filters
     *
     * @return FileAnalysisResults|null
     */
    public function analyse(Node $node, array $filters): ?FileAnalysisResults
    {
        return $this->issues;
    }
}
