<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PrivateVisibility
 */
class PrivateNormalTest
{
    /**
     * Private string.
     *
     * @var string
     */
    private string $privateString = 'string';

    /**
     * Private array.
     *
     * @var array
     */
    private array $privateArray = array('first_item', 'second_item');

    /**
     * Private integer.
     *
     * @var int
     */
    private int $privateInteger = 100;

    /**
     * Private float.
     *
     * @var float
     */
    private float $privateFloat = 99.99;

    /**
     * Private boolean.
     *
     * @var bool
     */
    private bool $privateBoolean = true;

    /**
     * Private mixed.
     *
     * @var mixed
     */
    private $privateMixed;

    /**
     * Private null.
     *
     * @var null
     */
    private $privateNull = null;

    /**
     * Private object.
     *
     * @var object
     */
    private object $privateObject;

    /**
     * Private method without parameters.
     *
     * @return $this
     */
    private function privateMethodWithoutParameters(): self
    {
        return $this;
    }

    /**
     * Private method with String parameter.
     *
     * @param string $string
     *
     * @return $this
     */
    private function privateMethodWithStringParameter(string $string): self
    {
        return $this;
    }

    /**
     * Private method with Array parameter.
     *
     * @param array $array
     *
     * @return $this
     */
    private function privateMethodWithArrayParameter(array $array): self
    {
        return $this;
    }

    /**
     * Private method with Integer parameter.
     *
     * @param int $integer
     *
     * @return $this
     */
    private function privateMethodWithIntegerParameter(int $integer): self
    {
        return $this;
    }

    /**
     * Private method with Float parameter.
     *
     * @param float $float
     *
     * @return $this
     */
    private function privateMethodWithFloatParameter(float $float): self
    {
        return $this;
    }

    /**
     * Private method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return $this
     */
    private function privateMethodWithBoolParameter(bool $boolean): self
    {
        return $this;
    }

    /**
     * Private method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return $this
     */
    private function privateMethodWithMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Private method with Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    private function privateMethodWithNullParameter($null): self
    {
        return $this;
    }

    /**
     * Private method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return $this
     */
    private function privateMethodWithObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Private method with all parameter.
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
     * @return $this
     */
    private function privateMethodWithAllParameter(
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
        return $this;
    }

    /**
     * Private method with self return.
     *
     * @return self
     */
    private function privateMethodWithSelfReturn(): self
    {
        return $this;
    }

    /**
     * Private method with void return.
     *
     * @return void
     */
    private function privateMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Private method with string return.
     *
     * @return string
     */
    private function privateMethodWithStringReturn(): string
    {
        return $this->privateString;
    }

    /**
     * Private method with array return.
     *
     * @return array $array
     */
    private function privateMethodWithArrayReturn(): array
    {
        return $this->privateArray;
    }

    /**
     * Private method with integer return.
     *
     * @return int
     */
    private function privateMethodWithIntegerReturn(): int
    {
        return $this->privateInteger;
    }

    /**
     * Private method with float return.
     *
     * @return float
     */
    private function privateMethodWithFloatReturn(): float
    {
        return $this->privateFloat;
    }

    /**
     * Private method with boolean return.
     *
     * @return bool
     */
    private function privateMethodWithBoolReturn(): bool
    {
        return $this->privateBoolean;
    }

    /**
     * Private method with Mixed return.
     *
     * @return mixed
     */
    private function privateMethodWithMixedReturn()
    {
        return $this->privateMixed;
    }

    /**
     * Private method with Mixed return.
     *
     * @return null
     */
    private function privateMethodWithNullReturn()
    {
        return $this->privateNull;
    }

    /**
     * Private method with object return.
     *
     * @return object
     */
    private function privateMethodWithObjectReturn(): object
    {
        return $this->privateObject;
    }

    /**
     * Private method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    private function privateMethodWithCompoundReturn()
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