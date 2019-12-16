<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Typed\PublicVisibility
 */
class PublicNormalTest
{
    /**
     * Public string.
     *
     * @var string
     */
    public string $publicString = 'string';

    /**
     * Public array.
     *
     * @var array
     */
    public array $publicArray = array('first_item', 'second_item');

    /**
     * Public integer.
     *
     * @var int
     */
    public int $publicInteger = 100;

    /**
     * Public float.
     *
     * @var float
     */
    public float $publicFloat = 99.99;

    /**
     * Public boolean.
     *
     * @var bool
     */
    public bool $publicBoolean = true;

    /**
     * Public mixed.
     *
     * @var mixed
     */
    public $publicMixed;

    /**
     * Public null.
     *
     * @var null
     */
    public $publicNull = null;

    /**
     * Public object.
     *
     * @var object
     */
    public object $publicObject;

    /**
     * Public method without parameters.
     *
     * @return $this
     */
    public function publicMethodWithoutParameters(): self
    {
        return $this;
    }

    /**
     * Public method with String parameter.
     *
     * @param string $string
     *
     * @return $this
     */
    public function publicMethodWithStringParameter(string $string): self
    {
        return $this;
    }

    /**
     * Public method with Array parameter.
     *
     * @param array $array
     *
     * @return $this
     */
    public function publicMethodWithArrayParameter(array $array): self
    {
        return $this;
    }

    /**
     * Public method with Integer parameter.
     *
     * @param int $integer
     *
     * @return $this
     */
    public function publicMethodWithIntegerParameter(int $integer): self
    {
        return $this;
    }

    /**
     * Public method with Float parameter.
     *
     * @param float $float
     *
     * @return $this
     */
    public function publicMethodWithFloatParameter(float $float): self
    {
        return $this;
    }

    /**
     * Public method with Boolean parameter.
     *
     * @param bool $boolean
     *
     * @return $this
     */
    public function publicMethodWithBoolParameter(bool $boolean): self
    {
        return $this;
    }

    /**
     * Public method with Mixed parameter.
     *
     * @param mixed $mixed
     *
     * @return $this
     */
    public function publicMethodWithMixedParameter($mixed): self
    {
        return $this;
    }

    /**
     * Public method with Null parameter.
     *
     * @param null $null
     *
     * @return $this
     */
    public function publicMethodWithNullParameter($null): self
    {
        return $this;
    }

    /**
     * Public method with Object parameter.
     *
     * @param object $typedObject
     *
     * @return $this
     */
    public function publicMethodWithObjectParameter($typedObject): self
    {
        return $this;
    }

    /**
     * Public method with all parameter.
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
    public function publicMethodWithAllParameter(
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
     * Public method with self return.
     *
     * @return self
     */
    public function publicMethodWithSelfReturn(): self
    {
        return $this;
    }

    /**
     * Public method with void return.
     *
     * @return void
     */
    public function publicMethodWithVoidReturn(): void
    {
        return;
    }

    /**
     * Public method with string return.
     *
     * @return string
     */
    public function publicMethodWithStringReturn(): string
    {
        return $this->publicString;
    }

    /**
     * Public method with array return.
     *
     * @return array $array
     */
    public function publicMethodWithArrayReturn(): array
    {
        return $this->publicArray;
    }

    /**
     * Public method with integer return.
     *
     * @return int
     */
    public function publicMethodWithIntegerReturn(): int
    {
        return $this->publicInteger;
    }

    /**
     * Public method with float return.
     *
     * @return float
     */
    public function publicMethodWithFloatReturn(): float
    {
        return $this->publicFloat;
    }

    /**
     * Public method with boolean return.
     *
     * @return bool
     */
    public function publicMethodWithBoolReturn(): bool
    {
        return $this->publicBoolean;
    }

    /**
     * Public method with Mixed return.
     *
     * @return mixed
     */
    public function publicMethodWithMixedReturn()
    {
        return $this->publicMixed;
    }

    /**
     * Public method with Mixed return.
     *
     * @return null
     */
    public function publicMethodWithNullReturn()
    {
        return $this->publicNull;
    }

    /**
     * Public method with object return.
     *
     * @return object
     */
    public function publicMethodWithObjectReturn(): object
    {
        return $this->publicObject;
    }

    /**
     * Public method with compound return.
     *
     * @return string|array|integer|float|boolean|object|null
     *
     * @throws \Exception
     */
    public function publicMethodWithCompoundReturn()
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
        return $this->{$options[random_int(1, 7)]};
    }

    /**
     * PublicNormalTest constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
    }

    /**
     * PublicNormalTest destructor.
     */
    public function __destruct()
    {
    }

    /**
     * PublicNormalTest call.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return string
     */
    public function __call(string $name, array $arguments): string
    {
        return $name;
    }

    /**
     * PublicNormalTest get.
     *
     * @param string $name
     *
     * @return bool
     */
    public function __get(string $name): bool
    {
        return false;
    }

    /**
     * PublicNormalTest set.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function __set(string $name, $value): void
    {
    }

    /**
     * PublicNormalTest isset.
     *
     * @param string $name
     *
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return false;
    }

    /**
     * PublicNormalTest unset.
     *
     * @param string $name
     *
     * @return void
     */
    public function __unset(string $name): void
    {
    }

    /**
     * PublicNormalTest sleep.
     *
     * @return array
     */
    public function __sleep(): array
    {
        return array();
    }

    /**
     * PublicNormalTest wakeup.
     *
     * @return void
     */
    public function __wakeup(): void
    {
    }

    /**
     * PublicNormalTest to string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->publicString;
    }

    /**
     * PublicNormalTest invoke.
     *
     * @param bool $flag
     *
     * @return string
     */
    public function __invoke(bool $flag): string
    {
        return 'invoked';
    }

    /**
     * PublicNormalTest clone.
     */
    public function __clone()
    {
    }

    /**
     * PublicNormalTest debug info.
     *
     * @return array
     */
    public function __debugInfo(): array
    {
        return array();
    }
}