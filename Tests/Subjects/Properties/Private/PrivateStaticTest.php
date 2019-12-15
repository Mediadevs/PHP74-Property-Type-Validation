<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PrivateStaticTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PrivateStaticTest
{
    /**
     * Static private string.
     *
     * @var string
     */
    private static string $staticPrivateString = 'string';

    /**
     * Static private array.
     *
     * @var array
     */
    private static array $staticPrivateArray = array('first_item', 'second_item');

    /**
     * Static private integer.
     *
     * @var int
     */
    private static int $staticPrivateInteger = 100;

    /**
     * Static private float.
     *
     * @var float
     */
    private static float $staticPrivateFloat = 99.99;

    /**
     * Static private boolean.
     *
     * @var bool
     */
    private static bool $staticPrivateBoolean = true;

    /**
     * Static private typed object.
     *
     * @var TypedObject
     */
    private static TypedObject $staticPrivateTypedObject;
}
