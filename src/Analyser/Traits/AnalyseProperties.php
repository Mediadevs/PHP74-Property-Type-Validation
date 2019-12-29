<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use PhpParser\Node;

/**
 * Trait AnalyseProperties.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Traits
 */
trait AnalyseProperties
{
    /**
     * Collecting the property type based upon the node.
     *
     * @param \PhpParser\Node\Stmt\Property $node
     *
     * @return string|null
     */
    protected function getPropertyType(Node\Stmt\Property $node): ?string
    {
        return $node->getType();
    }
}