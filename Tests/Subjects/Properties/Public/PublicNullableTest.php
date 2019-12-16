<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Properties;

use Mediadevs\StrictlyPHP\Tests\TypedObject;

/**
 * Class PublicNullableTest.
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Properties
 */
class PublicNullableTest
{
    /**
     * Nullable public string.
     *
     * @var null|string
     */
    public ?string $nullablePublicString = 'string';

    /**
     * Nullable public array.
     *
     * @var array|null
     */
    public ?array $nullablePublicArray = array('first_item', 'second_item');

    /**
     * Nullable public integer.
     *
     * @var int|null
     */
    public ?int $nullablePublicInteger = 100;

    /**
     * Nullable public float.
     *
     * @var float|null
     */
    public ?float $nullablePublicFloat = 99.99;

    /**
     * Nullable public boolean.
     *
     * @var bool|null
     */
    public ?bool $nullablePublicBoolean = true;

    /**
     * Nullable public typed object.
     *
     * @var TypedObject|null
     */
    public ?TypedObject $nullablePublicTypedObject;
}
