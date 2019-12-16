<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility;

/**
 * Class PublicStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility
 */
class ProtectedStaticTest
{
    /**
     * Protected static string.
     *
     * @var string
     */
    protected static string $protectedStaticString = 'string';

    /**
     * Protected static array.
     *
     * @var array
     */
    protected static array $protectedStaticArray = array('first_item', 'second_item');

    /**
     * Protected static integer.
     *
     * @var int
     */
    protected static int $protectedStaticInteger = 100;

    /**
     * Protected static float.
     *
     * @var float
     */
    protected static float $protectedStaticFloat = 99.99;

    /**
     * Protected static boolean.
     *
     * @var bool
     */
    protected static bool $protectedStaticBoolean = true;

    /**
     * Protected static mixed.
     *
     * @var mixed
     */
    protected static $protectedStaticMixed;

    /**
     * Protected static null.
     *
     * @var null
     */
    protected static $protectedStaticNull = null;

    /**
     * Protected static object.
     *
     * @var object
     */
    protected static object $protectedStaticObject;

    /**
     * Protected static method without parameters.
     *
     * @return self
     */
    protected static function protectedMethodWithoutParameters(): self
    {
        return new static();
    }

    /**
     * Protected static method with String parameter.
     *
     * @param string $string
     *
     * @return self
     */
    protected static function protectedMethodWithStringParameter(string $string): self
    {
        return new static();
    }

    /**
     * Protected static method with Array parameter.
     *
     * @param array $array
     *
     * @return self
     */
    protected static function protectedMethodWithArrayParameter(array $array): self
    {
        return new static();
    }

    /**
     * Protected static method with Integer parameter.
     *
     * @param int $integer
     *
     * @return self
     */
    protected static function protectedMethodWithIntegerParameter(int $integer): self
    {
        return new static();
    }

    /**
     * Protected static method with Float parameter.
     *
     * @param float $float
     *
     * @return self
     */
    protected static function protectedMethodWithFloatParameter(float $float): self
    {
        return new static();
    }

    /**
     * Protected static method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return self
     */
    protected static function protectedMethodWithBoolParameter(bool $boolean): self
    {
        return new static();
    }

    /**
     * Protected static method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return self
     */
    protected static function protectedMethodWithMixedParameter($mixed): self
    {
        return new static();
    }

    /**
     * Protected static method with Null parameter.
     *
     * @param null $null
     *
     * @return self
     */
    protected static function protectedMethodWithNullParameter($null): self
    {
        return new static();
    }

    /**
     * Protected static method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return self
     */
    protected static function protectedMethodWithObjectParameter($typedObject): self
    {
        return new static();
    }

    /**
     * Protected static method with all parameter.
     *
     * @param string $string
     * @param array  $array
     * @param int    $integer
     * @param float  $float
     * @param bool   $boolean
     * @param        $mixed
     * @param        $null
     * @param object $object
     *
     * @return self
     */
    protected static function protectedMethodWithAllParameter(
        string $string,
        array $array,
        int $integer,
        float $float,
        bool $boolean,
        $mixed,
        $null,
        object $object
    ): self
    {
        return new static();
    }

    /**
     * Protected static method with self return.
     *
     * @return self
     */
    protected static function protectedMethodWithSelfReturn(): self
    {
        return new static();
    }

    /**
     * Protected static method with void return.
     *
     * @return void
     */
    protected static function protectedMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Protected static method with string return.
     *
     * @return string
     */
    protected static function protectedMethodWithStringReturn(): string
    {
        return self::$protectedStaticString;
    }

    /**
     * Protected static method with array return.
     *
     * @return array $array
     */
    protected static function protectedMethodWithArrayReturn(): array
    {
        return self::$protectedStaticArray;
    }

    /**
     * Protected static method with integer return.
     *
     * @return int
     */
    protected static function protectedMethodWithIntegerReturn(): int
    {
        return self::$protectedStaticInteger;
    }

    /**
     * Protected static method with float return.
     *
     * @return float
     */
    protected static function protectedMethodWithFloatReturn(): float
    {
        return self::$protectedStaticFloat;
    }

    /**
     * Protected static method with boolean return.
     *
     * @return bool
     */
    protected static function protectedMethodWithBoolReturn(): bool
    {
        return self::$protectedStaticBoolean;
    }

    /**
     * Protected static method with Mixed return.
     *
     * @return mixed
     */
    protected static function protectedMethodWithMixedReturn()
    {
        return self::$protectedStaticMixed;
    }

    /**
     * Protected static method with Mixed return.
     *
     * @return null
     */
    protected static function protectedMethodWithNullReturn()
    {
        return self::$protectedStaticNull;
    }

    /**
     * Protected static method with object return.
     *
     * @return object
     */
    protected static function protectedMethodWithObjectReturn(): object
    {
        return self::$protectedStaticObject;
    }

    /**
     * Protected static method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    protected static function protectedMethodWithCompoundReturn()
    {
        $options = array(
            1 => 'protectedString',
            2 => 'protectedArray',
            3 => 'protectedInteger',
            4 => 'protectedFloat',
            5 => 'protectedBoolean',
            6 => 'protectedObject',
            7 => 'protectedNull',
        );

        // Returning a random type.
        return self::${$options[random_int(1, 7)]};
    }
}