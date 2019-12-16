<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility;

/**
 * Class PrivateNullableTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility
 */
class PrivateNullableTest
{
    /**
     * Private nullable string.
     *
     * @var null|string
     */
    private ?string $privateNullableString = 'string';

    /**
     * Private nullable array.
     *
     * @var array|null
     */
    private ?array $privateNullableArray = array('first_item', 'second_item');

    /**
     * Private nullable integer.
     *
     * @var int|null
     */
    private ?int $privateNullableInteger = 100;

    /**
     * Private nullable  float.
     *
     * @var float|null
     */
    private ?float $privateNullableFloat = 99.99;

    /**
     * Private nullable boolean.
     *
     * @var bool|null
     */
    private ?bool $privateNullableBoolean = true;

    /**
     * Private nullable mixed.
     *
     * @var mixed|null
     */
    private $privateNullableMixed;

    /**
     * Private null.
     *
     * @var null
     */
    private $privateNullableNull = null;

    /**
     * Private nullable object.
     *
     * @var object|null
     */
    private ?object $privateNullableObject;

    /**
     * Private method without parameters.
     *
     * @return $this
     */
    private function privateMethodWithoutNullableParameters(): self
    {
        return $this;
    }

    /**
     * Private method with nullable String parameter.
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
     * Private method with nullable Array parameter.
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
     * Private method with nullable Integer parameter.
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
     * Private method with nullable Float parameter.
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
     * Private method with nullable Boolean parameter.
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
     * Private method with nullable Mixed parameter.
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
     * Private method with nullable Null parameter.
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
     * Private method with nullable Object parameter.
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
     * Private method with all nullable parameters.
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
     * Private method with nullable self return.
     *
     * @return self
     */
    private function privateMethodWithNullableSelfReturn(): self
    {
        return $this;
    }

    /**
     * Private method with nullable void return.
     *
     * @return void
     */
    private function privateMethodWithNullableVoidReturn(): void
    {
        return;
    }

    /**
     * Private method with nullable nullable string return.
     *
     * @return string|null
     */
    private function privateMethodWithNullableStringReturn(): ?string
    {
        return $this->privateNullableString;
    }

    /**
     * Private method with nullable array return.
     *
     * @return array $array
     */
    private function privateMethodWithNullableArrayReturn(): ?array
    {
        return $this->privateNullableArray;
    }

    /**
     * Private method with nullable integer return.
     *
     * @return int|null
     */
    private function privateMethodWithNullableIntegerReturn(): ?int
    {
        return $this->privateNullableInteger;
    }

    /**
     * Private method with nullable float return.
     *
     * @return float|null
     */
    private function privateMethodWithNullableFloatReturn(): ?float
    {
        return $this->privateNullableFloat;
    }

    /**
     * Private method with nullable boolean return.
     *
     * @return bool|null
     */
    private function privateMethodWithNullableBoolReturn(): ?bool
    {
        return $this->privateNullableBoolean;
    }

    /**
     * Private method with nullable Mixed return.
     *
     * @return mixed|null
     */
    private function privateMethodWithNullableMixedReturn()
    {
        return $this->privateNullableMixed;
    }

    /**
     * Private method with nullable Mixed return.
     *
     * @return null|null
     */
    private function privateMethodWithNullableNullReturn()
    {
        return $this->privateNullableNull;
    }

    /**
     * Private method with nullable object return.
     *
     * @return object|null
     */
    private function privateMethodWithNullableObjectReturn(): ?object
    {
        return $this->privateNullableObject;
    }

    /**
     * Private method with nullable compound return.
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
        return $this->{$options[random_int(1, 7)]};
    }
}