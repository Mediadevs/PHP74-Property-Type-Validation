<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility;

/**
 * Class PublicStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility
 */
class PublicStaticTest
{
    /**
     * Public static string.
     *
     * @var string
     */
    public static string $publicStaticString = 'string';

    /**
     * Public static array.
     *
     * @var array
     */
    public static array $publicStaticArray = array('first_item', 'second_item');

    /**
     * Public static integer.
     *
     * @var int
     */
    public static int $publicStaticInteger = 100;

    /**
     * Public static float.
     *
     * @var float
     */
    public static float $publicStaticFloat = 99.99;

    /**
     * Public static boolean.
     *
     * @var bool
     */
    public static bool $publicStaticBoolean = true;

    /**
     * Public static mixed.
     *
     * @var mixed
     */
    public static $publicStaticMixed;

    /**
     * Public static null.
     *
     * @var null
     */
    public static $publicStaticNull = null;

    /**
     * Public static object.
     *
     * @var object
     */
    public static object $publicStaticObject;

    /**
     * Public static method without parameters.
     *
     * @return self
     */
    public static function publicMethodWithoutParameters(): self
    {
        return new static();
    }

    /**
     * Public static method with String parameter.
     *
     * @param string $string
     *
     * @return self
     */
    public static function publicMethodWithStringParameter(string $string): self
    {
        return new static();
    }

    /**
     * Public static method with Array parameter.
     *
     * @param array $array
     *
     * @return self
     */
    public static function publicMethodWithArrayParameter(array $array): self
    {
        return new static();
    }

    /**
     * Public static method with Integer parameter.
     *
     * @param int $integer
     *
     * @return self
     */
    public static function publicMethodWithIntegerParameter(int $integer): self
    {
        return new static();
    }

    /**
     * Public static method with Float parameter.
     *
     * @param float $float
     *
     * @return self
     */
    public static function publicMethodWithFloatParameter(float $float): self
    {
        return new static();
    }

    /**
     * Public static method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return self
     */
    public static function publicMethodWithBoolParameter(bool $boolean): self
    {
        return new static();
    }

    /**
     * Public static method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return self
     */
    public static function publicMethodWithMixedParameter($mixed): self
    {
        return new static();
    }

    /**
     * Public static method with Null parameter.
     *
     * @param null $null
     *
     * @return self
     */
    public static function publicMethodWithNullParameter($null): self
    {
        return new static();
    }

    /**
     * Public static method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return self
     */
    public static function publicMethodWithObjectParameter($typedObject): self
    {
        return new static();
    }

    /**
     * Public static method with all parameter.
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
    public static function publicMethodWithAllParameter(
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
     * Public static method with self return.
     *
     * @return self
     */
    public static function publicMethodWithSelfReturn(): self
    {
        return new static();
    }

    /**
     * Public static method with void return.
     *
     * @return void
     */
    public static function publicMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Public static method with string return.
     *
     * @return string
     */
    public static function publicMethodWithStringReturn(): string
    {
        return self::$publicStaticString;
    }

    /**
     * Public static method with array return.
     *
     * @return array $array
     */
    public static function publicMethodWithArrayReturn(): array
    {
        return self::$publicStaticArray;
    }

    /**
     * Public static method with integer return.
     *
     * @return int
     */
    public static function publicMethodWithIntegerReturn(): int
    {
        return self::$publicStaticInteger;
    }

    /**
     * Public static method with float return.
     *
     * @return float
     */
    public static function publicMethodWithFloatReturn(): float
    {
        return self::$publicStaticFloat;
    }

    /**
     * Public static method with boolean return.
     *
     * @return bool
     */
    public static function publicMethodWithBoolReturn(): bool
    {
        return self::$publicStaticBoolean;
    }

    /**
     * Public static method with Mixed return.
     *
     * @return mixed
     */
    public static function publicMethodWithMixedReturn()
    {
        return self::$publicStaticMixed;
    }

    /**
     * Public static method with Mixed return.
     *
     * @return null
     */
    public static function publicMethodWithNullReturn()
    {
        return self::$publicStaticNull;
    }

    /**
     * Public static method with object return.
     *
     * @return object
     */
    public static function publicMethodWithObjectReturn(): object
    {
        return self::$publicStaticObject;
    }

    /**
     * Public static method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    public static function publicMethodWithCompoundReturn()
    {
        $options = array(
            1 => 'publicString',
            2 => 'publicArray',
            3 => 'publicInteger',
            4 => 'publicFloat',
            5 => 'publicBoolean',
            6 => 'publicObject',
            7 => 'publicNull',
        );

        // Returning a random type.
        return self::${$options[random_int(1, 7)]};
    }

    /**
     * PublicStaticTest call static.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return string
     */
    public static function __callStatic(string $name, array $arguments): string
    {
        return $name;
    }

    /**
     * PublicStaticTest set state.
     *
     * @param array $properties
     *
     * @return static
     */
    public static function __set_state(array $properties): self
    {
        return new self;
    }
}