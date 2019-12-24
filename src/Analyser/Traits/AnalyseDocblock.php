<?php

namespace Mediadevs\StrictlyPHP\Analyser\Traits;

use phpDocumentor\Reflection\DocBlock;

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
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     *
     * @return string|null
     */
    protected function getReturnTypeFromDocblock(DocBlock $docBlock): ?string
    {
        return null;
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
        return null;
    }

    /**
     * Collecting the property type from the docblock.
     * If "Null" is returned it means there is NO property type, if a string is returned there is a property type.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     * @param string                             $parameter
     *
     * @return string|null
     */
    protected function getPropertyTypeFromDocblock(DocBlock $docBlock, string $parameter): ?string
    {
        return null;
    }

    /**
     * Validating whether the docblock is suppressed by "inheritdoc" (Parent class docblock).
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     *
     * @return bool
     */
    private function isSuppressedByInheritDoc(DocBlock $docBlock): bool
    {
        return false;
    }

    /**
     * Validating whether the type is suppressed by a compound type for example "string|null".
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     *
     * @return bool
     */
    private function isSuppressedByCompoundType(DocBlock $docBlock): bool
    {
        return false;
    }
}