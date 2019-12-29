<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use PhpParser\Node;

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
     * @param \PhpParser\Node\FunctionLike $node
     *
     * @return \PhpParser\Node\Param[]
     */
    protected function getParameters(Node\FunctionLike $node): array
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