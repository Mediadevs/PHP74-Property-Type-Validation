<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class PrivateStaticNullableTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class PrivateStaticNullableTest
{
    /**
     * Static nullable private string.
     *
     * @var string|null
     */
    private static ?string $staticNullablePrivateString = 'string';

    /**
     * Static nullable private array.
     *
     * @var array|null
     */
    private static ?array $staticNullablePrivateArray = array('first_item', 'second_item');

    /**
     * Static nullable private integer.
     *
     * @var int|null
     */
    private static ?int $staticNullablePrivateInteger = 100;

    /**
     * Static nullable private float.
     *
     * @var float|null
     */
    private static ?float $staticNullablePrivateFloat = 99.99;

    /**
     * Static nullable private boolean.
     *
     * @var bool|null
     */
    private static ?bool $staticNullablePrivateBoolean = true;

    /**
     * Static nullable private typed object.
     *
     * @var TypedObject|null
     */
    private static ?TypedObject $staticNullablePrivateTypedObject;
}
