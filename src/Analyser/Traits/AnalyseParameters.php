<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Report;

/**
 * Trait AnalyseParameters.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Traits
 */
trait AnalyseParameters
{
    /**
     * Collecting all the parameters from a "function like" node.
     *
     * @param \PhpParser\Node $node
     *
     * @return \PhpParser\Node\Param[]
     */
    protected function getParameters(Node $node): array
    {
        return $node->getParams();
    }

    /**
     * Collecting the parameter type based upon the given node.
     *
     * @param \PhpParser\Node\Param $node
     *
     * @return string|null
     */
    protected function getParameterType(Node\Param $node): ?string
    {
        return $node->getType() ? $node->getType() : null;
    }
}