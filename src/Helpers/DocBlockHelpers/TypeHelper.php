<?php

namespace Mediadevs\PHPStrictlyTyped\Helpers\DocBlockHelpers;

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
 * @package Mediadevs\PHPStrictlyTyped\Helpers\DocBlockHelpers
 */
class TypeHelper
{
    /**
     * The type which will be used for validation.
     *
     * @var null|Type
     */
    private ?Type $type;

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

        if ($this->type($type)->isNull()) {
            return true;
        }

        if ($this->type($type)->isMixed()) {
            return true;
        }

        if ($this->type($type)->isObject()) {
            return true;
        }

        if ($this->type($type)->isCompound()) {
            // The type is a compound (e.g union type, for example; "string|null")
            return $this->parseCompoundTypes();
        }

        return false;
    }

    /**
     * Setting the type which will be used for validation.
     *
     * @param Type|null $type
     *
     * @return $this
     */
    private function type(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Validating whether $this->type is of instance "Null_".
     *
     * @return bool
     */
    private function isNull(): bool
    {
        return ($this->type instanceof Null_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Mixed_".
     *
     * @return bool
     */
    private function isMixed(): bool
    {
        return ($this->type instanceof Mixed_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Object_".
     *
     * @return bool
     */
    private function isObject(): bool
    {
        return ($this->type instanceof Object_) ? true : false;
    }

    /**
     * Validating whether $this->type is of instance "Compound".
     *
     * @return bool
     *
     * @throws Exception
     */
    private function isCompound(): bool
    {
        // Whether type is a compound type and it has more than two items.
        return (($this->type instanceof Compound) && ($this->type->getIterator()->count() === 2)) ? true : false;
    }

    /**
     * Parsing through each type in the compound and validating whether the type is of instance "Null_".
     *
     * @return bool
     */
    private function parseCompoundTypes(): bool
    {
        foreach ($this->type as $type) {
            // Creating a sub-instance of TypeHelper to validate whether the subject type is null.
            return (new TypeHelper())->type($type)->isNull();
        }

        return false;
    }
}
