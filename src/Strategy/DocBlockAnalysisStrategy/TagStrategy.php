<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy;

/**
 * This class does analysis on the docblock to determine whether it has the current tag.
 * Based upon the validation it will follow a protocol of steps to validate
 * whether the typed tag is set and if the type is set, it determines whether the type is valid.
 *
 * Class TagStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy
 */
class TagStrategy
{
    /**
     * The docblock which is target for this analysis.
     *
     * @var \phpDocumentor\Reflection\DocBlock
     */
    protected DocBlock $docBlock;

    /**
     * TypeStrategy constructor.
     *
     * @param DocBlock $docBlock
     */
    public function __construct(DocBlock $docBlock)
    {
        $this->docBlock = $docBlock;
    }

    /**
     * Does an analysis on the docblock to validate whether it contains the given tag(s)
     *
     * Multiple tags can be passed as an argument. Since some tags for example "InheritDoc" have multiple
     * syntax types.
     *
     * @param array $tags
     *
     * @return bool
     */
    public function containsTags(array $tags): bool
    {
        return false;
    }

    /**
     * Does an analysis on the docblock to validate whether the given tag is typed.
     *
     * Multiple tags can be passed as an argument. Since some tags for example "InheritDoc" have multiple
     * syntax types. In this case "InheritDoc" will be ignored since it cannot be typed.
     *
     * @param array $tags
     *
     * @return bool
     */
    public function isTyped(array $tags): bool
    {
        return false;
    }
}
