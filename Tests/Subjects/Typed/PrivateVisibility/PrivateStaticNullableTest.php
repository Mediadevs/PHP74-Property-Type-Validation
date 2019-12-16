<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility;

/**
 * Class PrivateStaticNullableTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility
 */
class PrivateStaticNullableTest
{
    /**
     * Private static nullable string.
     *
     * @var string|null
     */
    private static ?string $privateStaticNullableString = 'string';

    /**
     * Private static nullable array.
     *
     * @var array|null
     */
    private static ?array $privateStaticNullableArray = array('first_item', 'second_item');

    /**
     * Private static nullable integer.
     *
     * @var int|null
     */
    private static ?int $privateStaticNullableInteger = 100;

    /**
     * Private static nullable float.
     *
     * @var float|null
     */
    private static ?float $privateStaticNullableFloat = 99.99;

    /**
     * Private static nullable boolean.
     *
     * @var bool|null
     */
    private static ?bool $privateStaticNullableBoolean = true;

    /**
     * Private nullable mixed.
     *
     * @var mixed|null
     */
    private static $privateStaticNullableMixed;

    /**
     * Private null.
     *
     * @var null
     */
    private static $privateStaticNullableNull = null;

    /**
     * Private nullable object.
     *
     * @var object|null
     */
    private static ?object $privateStaticNullableObject;

    /**
     * Private static method without parameters.
     *
     * @return $this
     */
    private function privateMethodWithoutNullableParameters(): self
    {
        return $this;
    }

    /**
     * Private static method with nullable String parameter.
     *
     * @param string|null $string
     *
     * @return $this
     */
    private function privateMethodWithNullableStringParameter(?string $string): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Array parameter.
     *
     * @param array|null $array
     *
     * @return $this
     */
    private function privateMethodWithNullableArrayParameter(?array $array): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Integer parameter.
     *
     * @param int|null $integer
     *
     * @return $this
     */
    private function privateMethodWithNullableIntegerParameter(?int $integer): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Float parameter.
     *
     * @param float|null $float
     *
     * @return $this
     */
    private function privateMethodWithNullableFloatParameter(?float $float): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Boolean parameter.
     *
     * @param bool|null $boolean
     *
     * @return $this
     */
    private function privateMethodWithNullableBoolParameter(?bool $boolean): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Mixed parameter.
     *
     * @param mixed|null $mixed
     *
     * @return $this
     */
    private function privateMethodWithNullableMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    private function privateMethodWithNullableNullParameter($null): self
    {
        return $this;
    }

    /**
     * Private static method with nullable Object parameter.
     *
     * @param object|null $typedObject
     *
     * @return $this
     */
    private function privateMethodWithNullableObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Private static method with all nullable parameters.
     *
     * @param string|null $string
     * @param array|null  $array
     * @param int|null    $integer
     * @param float|null  $float
     * @param bool|null   $boolean
     * @param             $mixed
     * @param             $null
     * @param object|null $object
     *
     * @return $this
     */
    private function privateMethodWithAllNullableParameter(
        ?string $string,
        ?array $array,
        ?int $integer,
        ?float $float,
        ?bool $boolean,
        $mixed,
        $null,
        ?object $object
    ): self
    {
        return $this;
    }

    /**
     * Private static method with nullable self return.
     *
     * @return self
     */
    private function privateMethodWithNullableSelfReturn(): self
    {
        return $this;
    }

    /**
     * Private static method with nullable void return.
     *
     * @return void
     */
    private function privateMethodWithNullableVoidReturn(): void
    {
        return;
    }

    /**
     * Private static method with nullable nullable string return.
     *
     * @return string|null
     */
    private function privateMethodWithNullableStringReturn(): ?string
    {
        return self::$privateStaticNullableString;
    }

    /**
     * Private static method with nullable array return.
     *
     * @return array $array
     */
    private function privateMethodWithNullableArrayReturn(): ?array
    {
        return self::$privateStaticNullableArray;
    }

    /**
     * Private static method with nullable integer return.
     *
     * @return int|null
     */
    private function privateMethodWithNullableIntegerReturn(): ?int
    {
        return self::$privateStaticNullableInteger;
    }

    /**
     * Private static method with nullable float return.
     *
     * @return float|null
     */
    private function privateMethodWithNullableFloatReturn(): ?float
    {
        return self::$privateStaticNullableFloat;
    }

    /**
     * Private static method with nullable boolean return.
     *
     * @return bool|null
     */
    private function privateMethodWithNullableBoolReturn(): ?bool
    {
        return self::$privateStaticNullableBoolean;
    }

    /**
     * Private static method with nullable Mixed return.
     *
     * @return mixed|null
     */
    private function privateMethodWithNullableMixedReturn()
    {
        return self::$privateStaticNullableMixed;
    }

    /**
     * Private static method with nullable Mixed return.
     *
     * @return null|null
     */
    private function privateMethodWithNullableNullReturn()
    {
        return self::$privateStaticNullableNull;
    }

    /**
     * Private static method with nullable object return.
     *
     * @return object|null
     */
    private function privateMethodWithNullableObjectReturn(): ?object
    {
        return self::$privateStaticNullableObject;
    }

    /**
     * Private static method with nullable compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    private function privateMethodWithNullableCompoundReturn()
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