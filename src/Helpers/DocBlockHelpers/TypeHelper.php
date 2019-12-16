<?php

namespace Mediadevs\StrictlyPHP\Helpers\DocBlockHelpers;

use Exception;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Mixed_;
use phpDocumentor\Reflection\Types\Object_;
use phpDocumentor\Reflection\Types\Compound;

/**
 * This helper class will be used to validate the parameter and return attributes from the docblock.
 *
 * The docblock will be validated whether it contains special return types, for example;
 * - Mixed_     (This contains all scalar types)
 * - Object_    (This is a resource / object)
 * - Null_      (This is a nullable type)
 * - Compound   (Also known as union types, for example; "string|null")
 *
 * Class TypeHelper.
 *
 * @package Mediadevs\StrictlyPHP\Helpers\DocBlockHelpers
 */
class TypeHelper
{
    /**
     * This method will be used in \DocBlockHelper to validate whether the parameter or return tag has the correct type.
     *
     * @param null|Type $type
     *
     * @return bool
     *
     * @throws Exception
     */
    public function hasType(?Type $type): bool
    {
        if (!empty($type)) {
            return false;
        }

        if ($this->isNull($type)) {
            return true;
        }

        if ($this->isMixed($type)) {
            return true;
        }

        if ($this->isObject($type)) {
            return true;
        }

        if ($this->isCompound($type)) {
            // The type is a compound (e.g union type, for example; "string|null")
            return $this->parseCompoundTypes($type);
        }

        return false;
    }

    /**
     * Validating whether $this->type is of instance "Null_".
     *
     * @param Type|null $type
     *
     * @return bool
     */
    private function isNull(?Type $type): bool
    {
        return ($type instanceof Null_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Mixed_".
     *
     * @param Type|null $type
     *
     * @return bool
     */
    private function isMixed(?Type $type): bool
    {
        return ($type instanceof Mixed_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Object_".
     *
     * @param Type|null $type
     *
     * @return bool
     */
    private function isObject(?Type $type): bool
    {
        return ($type instanceof Object_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Compound".
     *
     * @param Type|null $type
     *
     * @return bool
     *
     * @throws Exception
     */
    private function isCompound(?type $type): bool
    {
        // Whether type is a compound type and it has more than two items.
        return (($type instanceof Compound) && ($type->getIterator()->count() === 2)) ? true : false;
    }

    /**
     * Parsing through each type in the compound and validating whether the type is of instance "Null_".
     *
     * @param Type|null $types
     *
     * @return bool
     */
    private function parseCompoundTypes(?Type $types): bool
    {
        foreach ($types as $type) {
            // Creating a sub-instance of TypeHelper to validate whether the subject type is null.
            return (new TypeHelper())->isNull($type);
        }

        return false;
    }
}
