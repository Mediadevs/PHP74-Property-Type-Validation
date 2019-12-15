<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties;

use Mediadevs\PHPStrictlyTyped\Tests\TypedObject;

/**
 * Class ProtectedStaticNullableTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Properties
 */
class ProtectedStaticNullableTest
{
    /**
     * Static nullable protected string.
     *
     * @var string|null
     */
    protected static ?string $staticNullableProtectedString = 'string';

    /**
     * Static nullable protected array.
     *
     * @var array|null
     */
    protected static ?array $staticNullableProtectedArray = array('first_item', 'second_item');

    /**
     * Static nullable protected integer.
     *
     * @var int|null
     */
    protected static ?int $staticNullableProtectedInteger = 100;

    /**
     * Static nullable protected float.
     *
     * @var float|null
     */
    protected static ?float $staticNullableProtectedFloat = 99.99;

    /**
     * Static nullable protected boolean.
     *
     * @var bool|null
     */
    protected static ?bool $staticNullableProtectedBoolean = true;

    /**
     * Static nullable protected typed object.
     *
     * @var TypedObject|null
     */
    protected static ?TypedObject $staticNullableProtectedTypedObject;
}
