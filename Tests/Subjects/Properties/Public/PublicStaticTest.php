<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PublicStaticTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PublicStaticTest
{
    /**
     * Static public string.
     *
     * @var string
     */
    public static string $staticPublicString = 'string';

    /**
     * Static public array.
     *
     * @var array
     */
    public static array $staticPublicArray = array('first_item', 'second_item');

    /**
     * Static public integer.
     *
     * @var int
     */
    public static int $staticPublicInteger = 100;

    /**
     * Static public float.
     *
     * @var float
     */
    public static float $staticPublicFloat = 99.99;

    /**
     * Static public boolean.
     *
     * @var bool
     */
    public static bool $staticPublicBoolean = true;

    /**
     * Static public typed object.
     *
     * @var TypedObject
     */
    public static TypedObject $staticPublicTypedObject;
}
