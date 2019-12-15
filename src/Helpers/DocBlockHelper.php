<?php

namespace Mediadevs\PHPStrictlyTyped\Helpers;

use Exception;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;
use Mediadevs\PHPStrictlyTyped\Helpers\DocBlockHelpers\TypeHelper;

/**
 * This class validates the doc blocks and does checks on the content and structure.
 * The functionality of this class will be used by multiple analysers.
 *
 * Class DocBlockHelper.
 *
 * @package Mediadevs\PHPStrictlyTyped\Helpers
 */
class DocBlockHelper
{
    private const TAG_RETURN = 'return';
    private const TAG_PARAM = 'param';
    private const TAG_INHERITDOC = array(
        '{@inheritdoc}',
        'inheritdoc',
    );

    /**
     * The docblock which will be interacted with.
     *
     * @var DocBlock
     */
    private DocBlock $docBlock;

    /**
     * Setting the docblock which will be interacted with.
     *
     * @param DocBlock $docBlock
     *
     * @return $this
     */
    private function setDocBlock(DocBlock $docBlock): self
    {
        $this->docBlock = $docBlock;

        return $this;
    }

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
        if (in_array(strtolower($this->docBlock->getSummary()), self::TAG_INHERITDOC)) {
            return true;
        }

        // Parsing through the docblock description's tags and validating whether they contain the tag '@inheritdoc'.
        foreach ($this->docBlock->getDescription()->getTags() as $tag) {
            if ($tag instanceof Generic && in_array(strtolower($tag->getName()), self::TAG_INHERITDOC)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Validating whether the docblock contains the "return" tag.
     *
     * @param DocBlock $docBlock
     *
     * @return bool
     *
     * @throws Exception
     */
    public function docBlockContainsReturn(DocBlock $docBlock): bool
    {
        /** @var DocBlock\Tags\Param[] $returns */
        $returns = $docBlock->getTagsByName(self::TAG_RETURN);

        // Parsing through all the collected tags and applying validation for each tag.
        foreach ($returns as $tag) {
            return ($this->typeValidator($tag->getType()));
        }

        return false;
    }

    /**
     * Validating whether the docblock contains the "param" tag.
     *
     * @param DocBlock $docBlock
     *
     * @return bool
     *
     * @throws Exception
     */
    public function docBlockContainsParam(DocBlock $docBlock): bool
    {
        /** @var DocBlock\Tags\Param[] $parameters */
        $parameters = $docBlock->getTagsByName(self::TAG_PARAM);

        // Parsing through all the collected tags and applying validation for each tag.
        foreach ($parameters as $tag) {
            return ($this->typeValidator($tag->getType()));
        }

        return false;
    }

    /**
     * Applying the TypeHelper the determine whether this type is valid.
     *
     * @param Type|null $type
     *
     * @return bool
     *
     * @throws Exception
     */
    public function typeValidator(?Type $type): bool
    {
        return (new TypeHelper())->hasType($type);
    }
}
