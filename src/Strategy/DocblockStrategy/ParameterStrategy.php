<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocblockStrategy;

/**
 * Class ParameterStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocblockStrategy
 */
class ParameterStrategy extends AbstractDocBlockStrategy
{
    private const TAG = '@param';

    /**
     * Does an analysis on the docblock to determine whether it has the "@param" tag.
     *
     * @return bool
     * @throws \Exception
     */
    public function containsParameterTag(): bool
    {
        $parameters = $this->docBlock->getTagsByName(self::TAG);

        // Parsing through all the collected tags and applying validation for each tag.
        foreach ($parameters as $tag) {
            return ($this->typeStrategy->hasType($tag->getType()));
        }

        return false;
    }

    /**
     * Does an analysis on the docblock to determine whether it has the given parameter.
     *
     * @param string $parameter
     *
     * @return bool
     */
    public function hasGivenParameter(string $parameter): bool
    {
        return false;
    }

    /**
     * Validating whether the parameter has a type.
     *
     * @param string $parameter
     *
     * @return bool
     */
    public function parameterHasGivenType(string $parameter): bool
    {
        return false;
    }
}