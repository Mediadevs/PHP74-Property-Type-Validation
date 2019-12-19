<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocblockStrategy;

use phpDocumentor\Reflection\DocBlock\Tags\Generic;

/**
 * Class InheritDocStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocblockStrategy
 */
class InheritDocStrategy extends AbstractDocBlockStrategy
{
    private const TAGS = array(
        '{@inheritdoc}',
        '@inheritdoc',
        'inheritdoc'
    );

    /**
     * Validating whether the docblock is inherited.
     *
     * If it contains the tag {@inheritDoc} or the tag @inheritDoc it will return a value of true.
     * If not so it will return a value of false.
     *
     * @return bool
     */
    public function containsInheritDoc(): bool
    {
        // Validating whether it contains the direct tag.
        if (in_array(strtolower($this->docBlock->getSummary()), self::TAGS)) {
            return true;
        }

        // Parsing through the docblock description's tags and validating whether they contain the tag '@inheritdoc'.
        foreach ($this->docBlock->getDescription()->getTags() as $tag) {
            if ($tag instanceof Generic && in_array(strtolower($tag->getName()), self::TAGS)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Does an analysis on the docblock to determine whether it has the "@return" tag.
     *
     * @param string $return;
     *
     * @return bool
     */
    public function hasGivenReturn(string $return): bool
    {
        return false;
    }

    /**
     * Validating whether the return has a type.
     *
     * @param string $return
     *
     * @return bool
     */
    public function returnHasGivenType(string $return): bool
    {
        return false;
    }
}