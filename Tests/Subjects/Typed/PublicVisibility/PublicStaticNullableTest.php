<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility;

/**
 * Class PublicStaticNullableTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility
 */
class PublicStaticNullableTest
{
    /**
     * Public static nullable string.
     *
     * @var string|null
     */
    public static ?string $publicStaticNullableString = 'string';

    /**
     * Public static nullable array.
     *
     * @var array|null
     */
    public static ?array $publicStaticNullableArray = array('first_item', 'second_item');

    /**
     * Public static nullable integer.
     *
     * @var int|null
     */
    public static ?int $publicStaticNullableInteger = 100;

    /**
     * Public static nullable float.
     *
     * @var float|null
     */
    public static ?float $publicStaticNullableFloat = 99.99;

    /**
     * Public static nullable boolean.
     *
     * @var bool|null
     */
    public static ?bool $publicStaticNullableBoolean = true;

    /**
     * Public nullable mixed.
     *
     * @var mixed|null
     */
    public static $publicStaticNullableMixed;

    /**
     * Public null.
     *
     * @var null
     */
    public static $publicStaticNullableNull = null;

    /**
     * Public nullable object.
     *
     * @var object|null
     */
    public static ?object $publicStaticNullableObject;

    /**
     * Public static method without parameters.
     *
     * @return $this
     */
    public function publicMethodWithoutNullableParameters(): self
    {
        return $this;
    }

    /**
     * Public static method with nullable String parameter.
     *
     * @param string|null $string
     *
     * @return $this
     */
    public function publicMethodWithNullableStringParameter(?string $string): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Array parameter.
     *
     * @param array|null $array
     *
     * @return $this
     */
    public function publicMethodWithNullableArrayParameter(?array $array): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Integer parameter.
     *
     * @param int|null $integer
     *
     * @return $this
     */
    public function publicMethodWithNullableIntegerParameter(?int $integer): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Float parameter.
     *
     * @param float|null $float
     *
     * @return $this
     */
    public function publicMethodWithNullableFloatParameter(?float $float): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Boolean parameter.
     *
     * @param bool|null $boolean
     *
     * @return $this
     */
    public function publicMethodWithNullableBoolParameter(?bool $boolean): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Mixed parameter.
     *
     * @param mixed|null $mixed
     *
     * @return $this
     */
    public function publicMethodWithNullableMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    public function publicMethodWithNullableNullParameter($null): self
    {
        return $this;
    }

    /**
     * Public static method with nullable Object parameter.
     *
     * @param object|null $typedObject
     *
     * @return $this
     */
    public function publicMethodWithNullableObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Public static method with all nullable parameters.
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
    public function publicMethodWithAllNullableParameter(
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
     * Public static method with nullable self return.
     *
     * @return self
     */
    public function publicMethodWithNullableSelfReturn(): self
    {
        return $this;
    }

    /**
     * Public static method with nullable void return.
     *
     * @return void
     */
    public function publicMethodWithNullableVoidReturn(): void
    {
        return;
    }

    /**
     * Public static method with nullable nullable string return.
     *
     * @return string|null
     */
    public function publicMethodWithNullableStringReturn(): ?string
    {
        return self::$publicStaticNullableString;
    }

    /**
     * Public static method with nullable array return.
     *
     * @return array $array
     */
    public function publicMethodWithNullableArrayReturn(): ?array
    {
        return self::$publicStaticNullableArray;
    }

    /**
     * Public static method with nullable integer return.
     *
     * @return int|null
     */
    public function publicMethodWithNullableIntegerReturn(): ?int
    {
        return self::$publicStaticNullableInteger;
    }

    /**
     * Public static method with nullable float return.
     *
     * @return float|null
     */
    public function publicMethodWithNullableFloatReturn(): ?float
    {
        return self::$publicStaticNullableFloat;
    }

    /**
     * Public static method with nullable boolean return.
     *
     * @return bool|null
     */
    public function publicMethodWithNullableBoolReturn(): ?bool
    {
        return self::$publicStaticNullableBoolean;
    }

    /**
     * Public static method with nullable Mixed return.
     *
     * @return mixed|null
     */
    public function publicMethodWithNullableMixedReturn()
    {
        return self::$publicStaticNullableMixed;
    }

    /**
     * Public static method with nullable Mixed return.
     *
     * @return null|null
     */
    public function publicMethodWithNullableNullReturn()
    {
        return self::$publicStaticNullableNull;
    }

    /**
     * Public static method with nullable object return.
     *
     * @return object|null
     */
    public function publicMethodWithNullableObjectReturn(): ?object
    {
        return self::$publicStaticNullableObject;
    }

    /**
     * Public static method with nullable compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    public function publicMethodWithNullableCompoundReturn()
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
}