<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class ProtectedNormalTest
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class ProtectedProtectedNormalTest
{
    /**
     * Protected string.
     *
     * @var string
     */
    protected string $protectedString = 'string';

    /**
     * Protected array.
     *
     * @var array
     */
    protected array $protectedArray = array('first_item', 'second_item');

    /**
     * Protected integer.
     *
     * @var int
     */
    protected int $protectedInteger = 100;

    /**
     * Protected float.
     *
     * @var float
     */
    protected float $protectedFloat = 99.99;

    /**
     * Protected boolean.
     *
     * @var bool
     */
    protected bool $protectedBoolean = true;

    /**
     * Protected typed object.
     *
     * @var TypedObject
     */
    protected TypedObject $protectedTypedObject;
}
