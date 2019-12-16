<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility
 */
class PrivateStaticTest
{
    /**
     * Private static string.
     *
     * @var string
     */
    private static string $privateStaticString = 'string';

    /**
     * Private static array.
     *
     * @var array
     */
    private static array $privateStaticArray = array('first_item', 'second_item');

    /**
     * Private static integer.
     *
     * @var int
     */
    private static int $privateStaticInteger = 100;

    /**
     * Private static float.
     *
     * @var float
     */
    private static float $privateStaticFloat = 99.99;

    /**
     * Private static boolean.
     *
     * @var bool
     */
    private static bool $privateStaticBoolean = true;

    /**
     * Private static mixed.
     *
     * @var mixed
     */
    private static $privateStaticMixed;

    /**
     * Private static null.
     *
     * @var null
     */
    private static $privateStaticNull = null;

    /**
     * Private static object.
     *
     * @var object
     */
    private static object $privateStaticObject;

    /**
     * Private static method without parameters.
     *
     * @return self
     */
    private static function privateMethodWithoutParameters(): self
    {
        return new static();
    }

    /**
     * Private static method with String parameter.
     *
     * @param string $string
     *
     * @return self
     */
    private static function privateMethodWithStringParameter(string $string): self
    {
        return new static();
    }

    /**
     * Private static method with Array parameter.
     *
     * @param array $array
     *
     * @return self
     */
    private static function privateMethodWithArrayParameter(array $array): self
    {
        return new static();
    }

    /**
     * Private static method with Integer parameter.
     *
     * @param int $integer
     *
     * @return self
     */
    private static function privateMethodWithIntegerParameter(int $integer): self
    {
        return new static();
    }

    /**
     * Private static method with Float parameter.
     *
     * @param float $float
     *
     * @return self
     */
    private static function privateMethodWithFloatParameter(float $float): self
    {
        return new static();
    }

    /**
     * Private static method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return self
     */
    private static function privateMethodWithBoolParameter(bool $boolean): self
    {
        return new static();
    }

    /**
     * Private static method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return self
     */
    private static function privateMethodWithMixedParameter($mixed): self
    {
        return new static();
    }

    /**
     * Private static method with Null parameter.
     *
     * @param null $null
     *
     * @return self
     */
    private static function privateMethodWithNullParameter($null): self
    {
        return new static();
    }

    /**
     * Private static method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return self
     */
    private static function privateMethodWithObjectParameter($typedObject): self
    {
        return new static();
    }

    /**
     * Private static method with all parameter.
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
    private static function privateMethodWithAllParameter(
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
     * Private static method with self return.
     *
     * @return self
     */
    private static function privateMethodWithSelfReturn(): self
    {
        return new static();
    }

    /**
     * Private static method with void return.
     *
     * @return void
     */
    private static function privateMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Private static method with string return.
     *
     * @return string
     */
    private static function privateMethodWithStringReturn(): string
    {
        return self::$privateStaticString;
    }

    /**
     * Private static method with array return.
     *
     * @return array $array
     */
    private static function privateMethodWithArrayReturn(): array
    {
        return self::$privateStaticArray;
    }

    /**
     * Private static method with integer return.
     *
     * @return int
     */
    private static function privateMethodWithIntegerReturn(): int
    {
        return self::$privateStaticInteger;
    }

    /**
     * Private static method with float return.
     *
     * @return float
     */
    private static function privateMethodWithFloatReturn(): float
    {
        return self::$privateStaticFloat;
    }

    /**
     * Private static method with boolean return.
     *
     * @return bool
     */
    private static function privateMethodWithBoolReturn(): bool
    {
        return self::$privateStaticBoolean;
    }

    /**
     * Private static method with Mixed return.
     *
     * @return mixed
     */
    private static function privateMethodWithMixedReturn()
    {
        return self::$privateStaticMixed;
    }

    /**
     * Private static method with Mixed return.
     *
     * @return null
     */
    private static function privateMethodWithNullReturn()
    {
        return self::$privateStaticNull;
    }

    /**
     * Private static method with object return.
     *
     * @return object
     */
    private static function privateMethodWithObjectReturn(): object
    {
        return self::$privateStaticObject;
    }

    /**
     * Private static method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    private static function privateMethodWithCompoundReturn()
    {
        $options = array(
            1 => 'privateString',
            2 => 'privateArray',
            3 => 'privateInteger',
            4 => 'privateFloat',
            5 => 'privateBoolean',
            6 => 'privateObject',
            7 => 'privateNull',
        );

        // Returning a random type.
        return self::${$options[random_int(1, 7)]};
    }
}