<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility;

/**
 * Class PublicNullableTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility
 */
class ProtectedNullableTest
{
    /**
     * Protected nullable string.
     *
     * @var null|string
     */
    protected ?string $protectedNullableString = 'string';

    /**
     * Protected nullable array.
     *
     * @var array|null
     */
    protected ?array $protectedNullableArray = array('first_item', 'second_item');

    /**
     * Protected nullable integer.
     *
     * @var int|null
     */
    protected ?int $protectedNullableInteger = 100;

    /**
     * Protected nullable  float.
     *
     * @var float|null
     */
    protected ?float $protectedNullableFloat = 99.99;

    /**
     * Protected nullable boolean.
     *
     * @var bool|null
     */
    protected ?bool $protectedNullableBoolean = true;

    /**
     * Protected nullable mixed.
     *
     * @var mixed|null
     */
    protected $protectedNullableMixed;

    /**
     * Protected null.
     *
     * @var null
     */
    protected $protectedNullableNull = null;

    /**
     * Protected nullable object.
     *
     * @var object|null
     */
    protected ?object $protectedNullableObject;

    /**
     * Protected method without parameters.
     *
     * @return $this
     */
    protected function protectedMethodWithoutNullableParameters(): self
    {
        return $this;
    }

    /**
     * Protected method with nullable String parameter.
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
     * Protected method with nullable Array parameter.
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
     * Protected method with nullable Integer parameter.
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
     * Protected method with nullable Float parameter.
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
     * Protected method with nullable Boolean parameter.
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
     * Protected method with nullable Mixed parameter.
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
     * Protected method with nullable Null parameter.
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
     * Protected method with nullable Object parameter.
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
     * Protected method with all nullable parameters.
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
     * Protected method with nullable self return.
     *
     * @return self
     */
    protected function protectedMethodWithNullableSelfReturn(): self
    {
        return $this;
    }

    /**
     * Protected method with nullable void return.
     *
     * @return void
     */
    protected function protectedMethodWithNullableVoidReturn(): void
    {
        return;
    }

    /**
     * Protected method with nullable nullable string return.
     *
     * @return string|null
     */
    protected function protectedMethodWithNullableStringReturn(): ?string
    {
        return $this->protectedNullableString;
    }

    /**
     * Protected method with nullable array return.
     *
     * @return array $array
     */
    protected function protectedMethodWithNullableArrayReturn(): ?array
    {
        return $this->protectedNullableArray;
    }

    /**
     * Protected method with nullable integer return.
     *
     * @return int|null
     */
    protected function protectedMethodWithNullableIntegerReturn(): ?int
    {
        return $this->protectedNullableInteger;
    }

    /**
     * Protected method with nullable float return.
     *
     * @return float|null
     */
    protected function protectedMethodWithNullableFloatReturn(): ?float
    {
        return $this->protectedNullableFloat;
    }

    /**
     * Protected method with nullable boolean return.
     *
     * @return bool|null
     */
    protected function protectedMethodWithNullableBoolReturn(): ?bool
    {
        return $this->protectedNullableBoolean;
    }

    /**
     * Protected method with nullable Mixed return.
     *
     * @return mixed|null
     */
    protected function protectedMethodWithNullableMixedReturn()
    {
        return $this->protectedNullableMixed;
    }

    /**
     * Protected method with nullable Mixed return.
     *
     * @return null|null
     */
    protected function protectedMethodWithNullableNullReturn()
    {
        return $this->protectedNullableNull;
    }

    /**
     * Protected method with nullable object return.
     *
     * @return object|null
     */
    protected function protectedMethodWithNullableObjectReturn(): ?object
    {
        return $this->protectedNullableObject;
    }

    /**
     * Protected method with nullable compound return.
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
        return $this->{$options[random_int(1, 7)]};
    }
}