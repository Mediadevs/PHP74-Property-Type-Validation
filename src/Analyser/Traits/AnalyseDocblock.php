<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Mixed_;
use phpDocumentor\Reflection\Types\Object_;
use phpDocumentor\Reflection\Types\Compound;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

/**
 * Trait AnalyseDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Traits
 */
trait AnalyseDocblock
{
    /**
     * Collecting the return from the docblock.
     * If "Null" is returned it means there is NO return type, if a string is returned there is a return type.
     *
     * Collecting the return from the docblock, since there can only be one return tag we'll take the first one
     * from the array and return the type.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     *
     * @return string|null
     */
    protected function getReturnTypeFromDocblock(DocBlock $docBlock): ?string
    {
        /** @var \phpDocumentor\Reflection\DocBlock\Tags\Return_[] $returnTags */
        $returnTags = $docBlock->getTagsByName('return');

        return $returnTags[0]->getType();
    }

    /**
     * Collecting the parameter from the docblock based upon the given parameter.
     * If "Null" is returned it means there is NO parameter type, if a string is returned there is a parameter type.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     * @param string                             $parameter
     *
     * @return string|null
     */
    protected function getParameterTypeFromDocblock(DocBlock $docBlock, string $parameter): ?string
    {
        /** @var \phpDocumentor\Reflection\DocBlock\Tags\Param[] $parameterTags */
        $parameterTags = $docBlock->getTagsByName('param');

        foreach ($parameterTags as $parameterTag) {
            // Validating whether the parameter tag has a type based upon the given type.
            if ($parameterTag->getVariableName() !== $parameter) {
                continue;
            }

            return $parameterTag->getType();
        }

         // No parameter found which matches the given parameter, returning null.
        return null;
    }

    /**
     * Collecting the property type from the docblock.
     * If "Null" is returned it means there is NO property type, if a string is returned there is a property type.
     *
     * Collecting the property from the docblock, since there can only be one property tag we'll take the first one
     * from the array and property the type.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     * @param string                             $parameter
     *
     * @return string|null
     */
    protected function getPropertyTypeFromDocblock(DocBlock $docBlock, string $parameter): ?string
    {
        /** @var \phpDocumentor\Reflection\DocBlock\Tags\Property[] $propertyTags */
        $propertyTags = $docBlock->getTagsByName('var');

        return $propertyTags[0]->getType();
    }

    /**
     * Validating whether the docblock is suppressed by "inheritdoc" (Parent class docblock).
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     *
     * @return bool
     */
    protected function isSuppressedByInheritDoc(DocBlock $docBlock): bool
    {
        $inheritdoc = ['{@inheritdoc}', '@inheritdoc', 'inheritdoc'];

        if (in_array(strtolower($docBlock->getSummary()), $inheritdoc)) {
            return true;
        }

        foreach ($docBlock->getDescription()->getTags() as $tag) {
            $matchesTags = in_array(strtolower($docBlock->getSummary()), $inheritdoc);

            if ($tag instanceof Generic && $matchesTags) {
                return true;
            }
        }

        return false;
    }

    /**
     * Dynamically validating whether the type of the given tag is suppressed by type in the docblock.
     * A compound type for example is "string|null", the "var", "param" and "return" tags can all have
     * compound types. Other types which will suppress are "Mixed_" and "Object_".
     *
     * If the parameter argument is set the validation will analyse that specific parameter name.
     * Because validating all parameters is not the most effective way to approach the analysis.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     * @param string                             $type
     * @param string|null                        $parameter
     *
     * @return bool
     * @throws \Exception
     */
    protected function isSuppressedByType(DocBlock $docBlock, string $type, ?string $parameter = null): bool
    {
        /** @var \phpDocumentor\Reflection\DocBlock\Tags\Property[] $tags */
        $tags = $docBlock->getTagsByName($type);

        foreach ($tags as $tag) {
            // The parameter analysis deviates from the default analysis.
            // since the analysis will be done by parameter name the approach is slightly different.
            if ($parameter !== null && $type === 'parameter') {
                if ($tag->getVariableName() !== $tag) {
                    continue;
                }

                if ($this->typeIsset($tag->getType())) return true;
                if ($this->typeIsMixed($tag->getType())) return true;
                if ($this->typeIsObject($tag->getType())) return true;
                if ($this->typeIsCompound($tag->getType())) return true;
            }

            if ($this->typeIsset($tag->getType())) return true;
            if ($this->typeIsMixed($tag->getType())) return true;
            if ($this->typeIsObject($tag->getType())) return true;
            if ($this->typeIsCompound($tag->getType())) return true;
        }

        return false;
    }

    /**
     * Analysing whether the type is set.
     *
     * @param \phpDocumentor\Reflection\Type|null $type
     *
     * @return bool
     */
    private function typeIsset(?Type $type): bool
    {
        return (bool) ($type) ? true : false;
    }

    /**
     * Analysing whether the type is of abstract Mixed_.
     *
     * @param \phpDocumentor\Reflection\Type|null $type
     *
     * @return bool
     */
    private function typeIsMixed(?Type $type): bool
    {
        return (bool) ($type instanceof Mixed_) ? true : false;
    }

    /**
     * Analysing whether the type is an object. This can be the abstract Object_ type or a
     * custom object hinted by the developer.
     *
     * @param \phpDocumentor\Reflection\Type|null $type
     *
     * @return bool
     */
    private function typeIsObject(?Type $type): bool
    {
        return (bool) (($type instanceof Object_) && (!$type->getFqsen())) ? true : false;
    }

    /**
     * Analysing whether the type is a compound type.
     * A compound type in a docblock will look like this "string|null".
     *
     * @param \phpDocumentor\Reflection\Type|null $type
     *
     * @return bool
     * @throws \Exception
     */
    private function typeIsCompound(?Type $type): bool
    {
        if ($type instanceof Compound) {
            if (2 === $type->getIterator()->count()) {
                // Ex: string|null => ?string
                foreach ($type as $t) {
                    if ($t instanceof Null_) {
                        return (bool) false;
                    }
                }
            }

            return (bool) true;
        }

        return (bool) false;
    }
}