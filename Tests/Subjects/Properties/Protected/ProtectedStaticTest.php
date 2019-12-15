<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class ProtectedStaticTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class ProtectedStaticTest
{
    /**
     * Static protected string.
     *
     * @var string
     */
    protected static string $staticProtectedString = 'string';

    /**
     * Static protected array.
     *
     * @var array
     */
    protected static array $staticProtectedArray = array('first_item', 'second_item');

    /**
     * Static protected integer.
     *
     * @var int
     */
    protected static int $staticProtectedInteger = 100;

    /**
     * Static protected float.
     *
     * @var float
     */
    protected static float $staticProtectedFloat = 99.99;

    /**
     * Static protected boolean.
     *
     * @var bool
     */
    protected static bool $staticProtectedBoolean = true;

    /**
     * Static protected typed object.
     *
     * @var TypedObject
     */
    protected static TypedObject $staticProtectedTypedObject;
}
