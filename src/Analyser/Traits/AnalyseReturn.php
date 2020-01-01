<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use PhpParser\Node;

/**
 * Trait AnalyseReturn.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Traits
 */
trait AnalyseReturn
{
    /**
     * Collecting all the parameters from a "function like" node.
     *
     * @param \PhpParser\Node $node
     *
     * @return string|null
     */
    protected function getReturnType(Node $node): ?string
    {
        return $node->getReturnType();
    }
}