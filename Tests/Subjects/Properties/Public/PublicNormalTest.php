<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Properties;

use Mediadevs\StrictlyPHP\Tests\TypedObject;

/**
 * Class PublicNormalTest
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Properties
 */
class PublicPublicNormalTest
{
    /**
     * Public string.
     *
     * @var string
     */
    public string $publicString = 'string';

    /**
     * Public array.
     *
     * @var array
     */
    public array $publicArray = array('first_item', 'second_item');

    /**
     * Public integer.
     *
     * @var int
     */
    public int $publicInteger = 100;

    /**
     * Public float.
     *
     * @var float
     */
    public float $publicFloat = 99.99;

    /**
     * Public boolean.
     *
     * @var bool
     */
    public bool $publicBoolean = true;

    /**
     * Public typed object.
     *
     * @var TypedObject
     */
    public TypedObject $publicTypedObject;
}
