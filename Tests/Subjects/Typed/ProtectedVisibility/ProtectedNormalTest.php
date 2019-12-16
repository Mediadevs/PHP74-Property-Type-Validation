<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\ProtectedVisibility
 */
class ProtectedNormalTest
{
    /**
     * Protected string.
     *
     * @var string
     */
    protected string $protectedString = 'string';

    /**
     * Protected array.
     *
     * @var array
     */
    protected array $protectedArray = array('first_item', 'second_item');

    /**
     * Protected integer.
     *
     * @var int
     */
    protected int $protectedInteger = 100;

    /**
     * Protected float.
     *
     * @var float
     */
    protected float $protectedFloat = 99.99;

    /**
     * Protected boolean.
     *
     * @var bool
     */
    protected bool $protectedBoolean = true;

    /**
     * Protected mixed.
     *
     * @var mixed
     */
    protected $protectedMixed;

    /**
     * Protected null.
     *
     * @var null
     */
    protected $protectedNull = null;

    /**
     * Protected object.
     *
     * @var object
     */
    protected object $protectedObject;

    /**
     * Protected method without parameters.
     *
     * @return $this
     */
    protected function protectedMethodWithoutParameters(): self
    {
        return $this;
    }

    /**
     * Protected method with String parameter.
     *
     * @param string $string
     *
     * @return $this
     */
    protected function protectedMethodWithStringParameter(string $string): self
    {
        return $this;
    }

    /**
     * Protected method with Array parameter.
     *
     * @param array $array
     *
     * @return $this
     */
    protected function protectedMethodWithArrayParameter(array $array): self
    {
        return $this;
    }

    /**
     * Protected method with Integer parameter.
     *
     * @param int $integer
     *
     * @return $this
     */
    protected function protectedMethodWithIntegerParameter(int $integer): self
    {
        return $this;
    }

    /**
     * Protected method with Float parameter.
     *
     * @param float $float
     *
     * @return $this
     */
    protected function protectedMethodWithFloatParameter(float $float): self
    {
        return $this;
    }

    /**
     * Protected method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return $this
     */
    protected function protectedMethodWithBoolParameter(bool $boolean): self
    {
        return $this;
    }

    /**
     * Protected method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return $this
     */
    protected function protectedMethodWithMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Protected method with Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    protected function protectedMethodWithNullParameter($null): self
    {
        return $this;
    }

    /**
     * Protected method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return $this
     */
    protected function protectedMethodWithObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Protected method with all parameter.
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
    protected function protectedMethodWithAllParameter(
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
     * Protected method with self return.
     *
     * @return self
     */
    protected function protectedMethodWithSelfReturn(): self
    {
        return $this;
    }

    /**
     * Protected method with void return.
     *
     * @return void
     */
    protected function protectedMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Protected method with string return.
     *
     * @return string
     */
    protected function protectedMethodWithStringReturn(): string
    {
        return $this->protectedString;
    }

    /**
     * Protected method with array return.
     *
     * @return array $array
     */
    protected function protectedMethodWithArrayReturn(): array
    {
        return $this->protectedArray;
    }

    /**
     * Protected method with integer return.
     *
     * @return int
     */
    protected function protectedMethodWithIntegerReturn(): int
    {
        return $this->protectedInteger;
    }

    /**
     * Protected method with float return.
     *
     * @return float
     */
    protected function protectedMethodWithFloatReturn(): float
    {
        return $this->protectedFloat;
    }

    /**
     * Protected method with boolean return.
     *
     * @return bool
     */
    protected function protectedMethodWithBoolReturn(): bool
    {
        return $this->protectedBoolean;
    }

    /**
     * Protected method with Mixed return.
     *
     * @return mixed
     */
    protected function protectedMethodWithMixedReturn()
    {
        return $this->protectedMixed;
    }

    /**
     * Protected method with Mixed return.
     *
     * @return null
     */
    protected function protectedMethodWithNullReturn()
    {
        return $this->protectedNull;
    }

    /**
     * Protected method with object return.
     *
     * @return object
     */
    protected function protectedMethodWithObjectReturn(): object
    {
        return $this->protectedObject;
    }

    /**
     * Protected method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    protected function protectedMethodWithCompoundReturn()
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