<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class ProtectedNullableTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class ProtectedNullableTest
{
    /**
     * Nullable protected string.
     *
     * @var null|string
     */
    protected ?string $nullableProtectedString = 'string';

    /**
     * Nullable protected array.
     *
     * @var array|null
     */
    protected ?array $nullableProtectedArray = array('first_item', 'second_item');

    /**
     * Nullable protected integer.
     *
     * @var int|null
     */
    protected ?int $nullableProtectedInteger = 100;

    /**
     * Nullable protected float.
     *
     * @var float|null
     */
    protected ?float $nullableProtectedFloat = 99.99;

    /**
     * Nullable protected boolean.
     *
     * @var bool|null
     */
    protected ?bool $nullableProtectedBoolean = true;

    /**
     * Nullable protected typed object.
     *
     * @var TypedObject|null
     */
    protected ?TypedObject $nullableProtectedTypedObject;
}
