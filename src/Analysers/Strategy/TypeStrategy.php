<?php

namespace Mediadevs\StrictlyPHP\Strategy;

use PhpParser\Node;

/**
 * Class TypeStrategy.
 *
 * For more details about php primitive types you can visit the original documentation.
 * @see https://www.php.net/manual/en/language.types.intro.php
 *
 * @package Mediadevs\StrictlyPHP\Strategy
 */
class TypeStrategy
{
    /**
     * Collecting the current type based upon the type analysis strategy which will be applied in the method body.
     *
     * @param \PhpParser\Node $node
     *
     * @return string|null
     */
    public function getTypeStrategy(Node $node): ?string
    {
        // Validating whether the type is (scalar) string.
        if ($this->isTypeString($node)) {
            return $node->getType();
        }

        // Validating whether the type is (scalar) integer.
        if ($this->isTypeInteger($node)) {
            return $node->getType();
        }

        // Validating whether the type is (scalar) float.
        if ($this->isTypeFloat($node)) {
            return $node->getType();
        }

        // Validating whether the type is (scalar) boolean.
        if ($this->isTypeBoolean($node)) {
            return $node->getType();
        }

        // Validating whether the type is (other) null.
        if ($this->isTypeNull($node)) {
            return $node->getType();
        }

        // Validating whether the type is (other) mixed.
        if ($this->isTypeMixed($node)) {
            return $node->getType();
        }

        // Validating whether the type is (other) object.
        if ($this->isTypeObject($node)) {
            return $node->getType();
        }

        // Validating whether the type is (other) array.
        if ($this->isTypeArray($node)) {
            return $node->getType();
        }

        // Type not found or undefined.
        return null;
    }

    /**
     * Whether the current node is of type string.
     *
     * Validates whether the current node is of instance "\Node\Scalar\String_"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeString(Node $node): bool
    {
        return (bool) ($node instanceof Node\Scalar\String_) ? true : false;
    }

    /**
     * Whether the current node is of type integer.
     *
     * Validates whether the current node is of instance "\Node\Scalar\LNumber"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeInteger(Node $node): bool
    {
        return (bool) ($node instanceof Node\Scalar\LNumber) ? true : false;
    }

    /**
     * Whether the current node is of type float.
     *
     * Validates whether the current node is of instance "\Node\Scalar\DNumber"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeFloat(Node $node): bool
    {
        return (bool) ($node instanceof Node\Scalar\DNumber) ? true : false;
    }

    /**
     * Whether the current node is of type boolean.
     *
     * Validates whether the current node is of instance "\Node\Scalar\LNumber"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeBoolean(Node $node): bool
    {
        return (bool) ($node instanceof Node\Expr\ConstFetch) ? true : false;
    }

    /**
     * Whether the current node is of type string.
     *
     * Validates whether the current node is of instance "\Node\Expr\Array_"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeArray(Node $node): bool
    {
        return (bool) ($node instanceof Node\Expr\Array_) ? true : false;
    }

    /**
     * Whether the current node is of type null.
     *
     * Validates whether the current node is of instance "\Node\Stmt\PropertyProperty"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeNull(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\PropertyProperty) ? true : false;
    }

    /**
     * Whether the current node is of type mixed.
     *
     * Validates whether the current node is of instance "\Node\Stmt\PropertyProperty"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeMixed(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\PropertyProperty) ? true : false;
    }

    /**
     * Whether the current node is of type object.
     *
     * Validates whether the current node is of instance "\Node\Stmt\PropertyProperty"
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isTypeObject(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\PropertyProperty) ? true : false;
    }
}