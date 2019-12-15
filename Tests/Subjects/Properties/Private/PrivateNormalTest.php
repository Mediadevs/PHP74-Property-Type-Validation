<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PrivateNormalTest
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PrivateNormalTest
{
    /**
     * Private string.
     *
     * @var string
     */
    private string $privateString = 'string';

    /**
     * Private array.
     *
     * @var array
     */
    private array $privateArray = array('first_item', 'second_item');

    /**
     * Private integer.
     *
     * @var int
     */
    private int $privateInteger = 100;

    /**
     * Private float.
     *
     * @var float
     */
    private float $privateFloat = 99.99;

    /**
     * Private boolean.
     *
     * @var bool
     */
    private bool $privateBoolean = true;

    /**
     * Private typed object.
     *
     * @var TypedObject
     */
    private TypedObject $privateTypedObject;
}
