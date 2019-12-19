<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocblockStrategy;

/**
 * Class VarStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocblockStrategy
 */
class VarStrategy extends AbstractDocBlockStrategy
{
    private const TAG = '@var';

    /**
     * Does an analysis on the docblock to determine whether it has the "@var" tag.
     *
     * @return bool
     * @throws \Exception
     */
    public function containsVarTag(): bool
    {
        $vars = $this->docBlock->getTagsByName(self::TAG);

        // Parsing through all the collected tags and applying validation for each tag.
        foreach ($vars as $tag) {
            return ($this->typeStrategy->hasType($tag->getType()));
        }

        return false;
    }

    /**
     * Does an analysis on the docblock to determine whether it has the "@var" tag.
     *
     * @param string $var
     *
     * @return bool
     */
    public function hasGivenVar(string $var): bool
    {
        return false;
    }

    /**
     * Validating whether the var has a type.
     *
     * @param string $var
     *
     * @return bool
     */
    public function varHasGivenType(string $var): bool
    {
        return false;
    }
}