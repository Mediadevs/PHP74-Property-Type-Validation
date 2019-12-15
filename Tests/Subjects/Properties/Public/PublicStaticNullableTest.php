<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PublicStaticNullableTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PublicStaticNullableTest
{
    /**
     * Static nullable public string.
     *
     * @var string|null
     */
    public static ?string $staticNullablePublicString = 'string';

    /**
     * Static nullable public array.
     *
     * @var array|null
     */
    public static ?array $staticNullablePublicArray = array('first_item', 'second_item');

    /**
     * Static nullable public integer.
     *
     * @var int|null
     */
    public static ?int $staticNullablePublicInteger = 100;

    /**
     * Static nullable public float.
     *
     * @var float|null
     */
    public static ?float $staticNullablePublicFloat = 99.99;

    /**
     * Static nullable public boolean.
     *
     * @var bool|null
     */
    public static ?bool $staticNullablePublicBoolean = true;

    /**
     * Static nullable public typed object.
     *
     * @var TypedObject|null
     */
    public static ?TypedObject $staticNullablePublicTypedObject;
}
