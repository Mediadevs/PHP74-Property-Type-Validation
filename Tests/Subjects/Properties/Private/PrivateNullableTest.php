<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PrivateNullableTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PrivateNullableTest
{
    /**
     * Nullable private string.
     *
     * @var null|string
     */
    private ?string $nullablePrivateString = 'string';

    /**
     * Nullable private array.
     *
     * @var array|null
     */
    private ?array $nullablePrivateArray = array('first_item', 'second_item');

    /**
     * Nullable private integer.
     *
     * @var int|null
     */
    private ?int $nullablePrivateInteger = 100;

    /**
     * Nullable private float.
     *
     * @var float|null
     */
    private ?float $nullablePrivateFloat = 99.99;

    /**
     * Nullable private boolean.
     *
     * @var bool|null
     */
    private ?bool $nullablePrivateBoolean = true;

    /**
     * Nullable private typed object.
     *
     * @var TypedObject|null
     */
    private ?TypedObject $nullablePrivateTypedObject;
}
