<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility;

/**
 * Class PublicStaticNullableTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility
 */
class ProtectedStaticNullableTest
{
    /**
     * Protected static nullable string.
     *
     * @var string|null
     */
    protected static ?string $protectedStaticNullableString = 'string';

    /**
     * Protected static nullable array.
     *
     * @var array|null
     */
    protected static ?array $protectedStaticNullableArray = array('first_item', 'second_item');

    /**
     * Protected static nullable integer.
     *
     * @var int|null
     */
    protected static ?int $protectedStaticNullableInteger = 100;

    /**
     * Protected static nullable float.
     *
     * @var float|null
     */
    protected static ?float $protectedStaticNullableFloat = 99.99;

    /**
     * Protected static nullable boolean.
     *
     * @var bool|null
     */
    protected static ?bool $protectedStaticNullableBoolean = true;

    /**
     * Protected nullable mixed.
     *
     * @var mixed|null
     */
    protected static $protectedStaticNullableMixed;

    /**
     * Protected null.
     *
     * @var null
     */
    protected static $protectedStaticNullableNull = null;

    /**
     * Protected nullable object.
     *
     * @var object|null
     */
    protected static ?object $protectedStaticNullableObject;

    /**
     * Protected static method without parameters.
     *
     * @return $this
     */
    protected function protectedMethodWithoutNullableParameters(): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable String parameter.
     *
     * @param string|null $string
     *
     * @return $this
     */
    protected function protectedMethodWithNullableStringParameter(?string $string): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Array parameter.
     *
     * @param array|null $array
     *
     * @return $this
     */
    protected function protectedMethodWithNullableArrayParameter(?array $array): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Integer parameter.
     *
     * @param int|null $integer
     *
     * @return $this
     */
    protected function protectedMethodWithNullableIntegerParameter(?int $integer): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Float parameter.
     *
     * @param float|null $float
     *
     * @return $this
     */
    protected function protectedMethodWithNullableFloatParameter(?float $float): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Boolean parameter.
     *
     * @param bool|null $boolean
     *
     * @return $this
     */
    protected function protectedMethodWithNullableBoolParameter(?bool $boolean): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Mixed parameter.
     *
     * @param mixed|null $mixed
     *
     * @return $this
     */
    protected function protectedMethodWithNullableMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    protected function protectedMethodWithNullableNullParameter($null): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable Object parameter.
     *
     * @param object|null $typedObject
     *
     * @return $this
     */
    protected function protectedMethodWithNullableObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Protected static method with all nullable parameters.
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
    protected function protectedMethodWithAllNullableParameter(
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
     * Protected static method with nullable self return.
     *
     * @return self
     */
    protected function protectedMethodWithNullableSelfReturn(): self
    {
        return $this;
    }

    /**
     * Protected static method with nullable void return.
     *
     * @return void
     */
    protected function protectedMethodWithNullableVoidReturn(): void
    {
        return;
    }

    /**
     * Protected static method with nullable nullable string return.
     *
     * @return string|null
     */
    protected function protectedMethodWithNullableStringReturn(): ?string
    {
        return self::$protectedStaticNullableString;
    }

    /**
     * Protected static method with nullable array return.
     *
     * @return array $array
     */
    protected function protectedMethodWithNullableArrayReturn(): ?array
    {
        return self::$protectedStaticNullableArray;
    }

    /**
     * Protected static method with nullable integer return.
     *
     * @return int|null
     */
    protected function protectedMethodWithNullableIntegerReturn(): ?int
    {
        return self::$protectedStaticNullableInteger;
    }

    /**
     * Protected static method with nullable float return.
     *
     * @return float|null
     */
    protected function protectedMethodWithNullableFloatReturn(): ?float
    {
        return self::$protectedStaticNullableFloat;
    }

    /**
     * Protected static method with nullable boolean return.
     *
     * @return bool|null
     */
    protected function protectedMethodWithNullableBoolReturn(): ?bool
    {
        return self::$protectedStaticNullableBoolean;
    }

    /**
     * Protected static method with nullable Mixed return.
     *
     * @return mixed|null
     */
    protected function protectedMethodWithNullableMixedReturn()
    {
        return self::$protectedStaticNullableMixed;
    }

    /**
     * Protected static method with nullable Mixed return.
     *
     * @return null|null
     */
    protected function protectedMethodWithNullableNullReturn()
    {
        return self::$protectedStaticNullableNull;
    }

    /**
     * Protected static method with nullable object return.
     *
     * @return object|null
     */
    protected function protectedMethodWithNullableObjectReturn(): ?object
    {
        return self::$protectedStaticNullableObject;
    }

    /**
     * Protected static method with nullable compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    protected function protectedMethodWithNullableCompoundReturn()
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