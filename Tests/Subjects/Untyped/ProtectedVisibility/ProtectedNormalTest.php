<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\ProtectedVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\ProtectedVisibility
 */
class ProtectedNormalTest
{
    /**
     * Protected string.
     */
    protected $protectedString = 'string';

    /**
     * Protected array.
     */
    protected $protectedArray = array('first_item', 'second_item');

    /**
     * Protected integer.
     */
    protected $protectedInteger = 100;

    /**
     * Protected float.
     */
    protected $protectedFloat = 99.99;

    /**
     * Protected boolean.
     */
    protected $protectedBoolean = true;

    /**
     * Protected mixed.
     */
    protected $protectedMixed;

    /**
     * Protected null.
     */
    protected $protectedNull = null;

    /**
     * Protected object.
     */
    protected $protectedObject;

    /**
     * Protected method without parameters.
     *
     * @return $this
     */
    protected function protectedMethodWithoutParameters()
    {
        return $this;
    }

    /**
     * Protected method with String parameter.
     *
     * @param $string
     *
     * @return $this
     */
    protected function protectedMethodWithStringParameter($string)
    {
        return $this;
    }

    /**
     * Protected method with Array parameter.
     *
     * @param $array
     *
     * @return $this
     */
    protected function protectedMethodWithArrayParameter($array)
    {
        return $this;
    }

    /**
     * Protected method with Integer parameter.
     *
     * @param $integer
     *
     * @return $this
     */
    protected function protectedMethodWithIntegerParameter($integer)
    {
        return $this;
    }

    /**
     * Protected method with Float parameter.
     *
     * @param $float
     *
     * @return $this
     */
    protected function protectedMethodWithFloatParameter($float)
    {
        return $this;
    }

    /**
     * Protected method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return $this
     */
    protected function protectedMethodWithBoolParameter($boolean)
    {
        return $this;
    }

    /**
     * Protected method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return $this
     */
    protected function protectedMethodWithMixedParameter($mixed)
    {
        return $this;
    }

    /**
     * Protected method with Null parameter.
     *
     * @param $null
     *
     * @return $this
     */
    protected function protectedMethodWithNullParameter($null)
    {
        return $this;
    }

    /**
     * Protected method with Object parameter.
     *
     * @param $typedObject
     *
     * @return $this
     */
    protected function protectedMethodWithObjectParameter($typedObject)
    {
        return $this;
    }

    /**
     * Protected method with all parameter.
     *
     * @param $string
     * @param $array
     * @param $integer
     * @param $float
     * @param $boolean
     * @param $mixed
     * @param $null
     * @param $object
     *
     * @return $this
     */
    protected function protectedMethodWithAllParameter(
        $string,
        $array,
        $integer,
        $float,
        $boolean,
        $mixed,
        $null,
        $object
    )
    {
        return $this;
    }

    /**
     * Protected method with self return.
     */
    protected function protectedMethodWithSelfReturn()
    {
        return $this;
    }

    /**
     * Protected method with void return.
     */
    protected function protectedMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Protected method with return.
     */
    protected function protectedMethodWithStringReturn()
    {
        return $this->protectedString;
    }

    /**
     * Protected method with return.
     */
    protected function protectedMethodWithArrayReturn()
    {
        return $this->protectedArray;
    }

    /**
     * Protected method with integer return.
     */
    protected function protectedMethodWithIntegerReturn()
    {
        return $this->protectedInteger;
    }

    /**
     * Protected method with return.
     */
    protected function protectedMethodWithFloatReturn()
    {
        return $this->protectedFloat;
    }

    /**
     * Protected method with boolean return.
     */
    protected function protectedMethodWithBoolReturn()
    {
        return $this->protectedBoolean;
    }

    /**
     * Protected method with Mixed return.
     */
    protected function protectedMethodWithMixedReturn()
    {
        return $this->protectedMixed;
    }

    /**
     * Protected method with Mixed return.
     */
    protected function protectedMethodWithNullReturn()
    {
        return $this->protectedNull;
    }

    /**
     * Protected method with return.
     */
    protected function protectedMethodWithObjectReturn()
    {
        return $this->protectedObject;
    }

    /**
     * Protected method with compound return.
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