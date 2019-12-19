<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocblockStrategy;

/**
 * Class ReturnStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocblockStrategy
 */
class ReturnStrategy extends AbstractDocBlockStrategy
{
    private const TAG = '@return';

    /**
     * Does an analysis on the docblock to determine whether it has the "@return" tag.
     *
     * @return bool
     * @throws \Exception
     */
    public function containsReturnTag(): bool
    {
        $returns = $this->docBlock->getTagsByName(self::TAG);

        // Parsing through all the collected tags and applying validation for each tag.
        foreach ($returns as $tag) {
            return ($this->typeStrategy->hasType($tag->getType()));
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