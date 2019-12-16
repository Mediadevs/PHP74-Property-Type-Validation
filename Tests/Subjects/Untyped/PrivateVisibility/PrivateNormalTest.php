<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PrivateVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PrivateVisibility
 */
class PrivateNormalTest
{
    /**
     * Private string.
     */
    private $privateString = 'string';

    /**
     * Private array.
     */
    private $privateArray = array('first_item', 'second_item');

    /**
     * Private integer.
     */
    private $privateInteger = 100;

    /**
     * Private float.
     */
    private $privateFloat = 99.99;

    /**
     * Private boolean.
     */
    private $privateBoolean = true;

    /**
     * Private mixed.
     */
    private $privateMixed;

    /**
     * Private null.
     */
    private $privateNull = null;

    /**
     * Private object.
     */
    private $privateObject;

    /**
     * Private method without parameters.
     *
     * @return $this
     */
    private function privateMethodWithoutParameters()
    {
        return $this;
    }

    /**
     * Private method with String parameter.
     *
     * @param $string
     *
     * @return $this
     */
    private function privateMethodWithStringParameter($string)
    {
        return $this;
    }

    /**
     * Private method with Array parameter.
     *
     * @param $array
     *
     * @return $this
     */
    private function privateMethodWithArrayParameter($array)
    {
        return $this;
    }

    /**
     * Private method with Integer parameter.
     *
     * @param $integer
     *
     * @return $this
     */
    private function privateMethodWithIntegerParameter($integer)
    {
        return $this;
    }

    /**
     * Private method with Float parameter.
     *
     * @param $float
     *
     * @return $this
     */
    private function privateMethodWithFloatParameter($float)
    {
        return $this;
    }

    /**
     * Private method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return $this
     */
    private function privateMethodWithBoolParameter($boolean)
    {
        return $this;
    }

    /**
     * Private method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return $this
     */
    private function privateMethodWithMixedParameter($mixed)
    {
        return $this;
    }

    /**
     * Private method with Null parameter.
     *
     * @param $null
     *
     * @return $this
     */
    private function privateMethodWithNullParameter($null)
    {
        return $this;
    }

    /**
     * Private method with Object parameter.
     *
     * @param $typedObject
     *
     * @return $this
     */
    private function privateMethodWithObjectParameter($typedObject)
    {
        return $this;
    }

    /**
     * Private method with all parameter.
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
    private function privateMethodWithAllParameter(
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
     * Private method with self return.
     */
    private function privateMethodWithSelfReturn()
    {
        return $this;
    }

    /**
     * Private method with void return.
     */
    private function privateMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Private method with return.
     */
    private function privateMethodWithStringReturn()
    {
        return $this->privateString;
    }

    /**
     * Private method with return.
     */
    private function privateMethodWithArrayReturn()
    {
        return $this->privateArray;
    }

    /**
     * Private method with integer return.
     */
    private function privateMethodWithIntegerReturn()
    {
        return $this->privateInteger;
    }

    /**
     * Private method with return.
     */
    private function privateMethodWithFloatReturn()
    {
        return $this->privateFloat;
    }

    /**
     * Private method with boolean return.
     */
    private function privateMethodWithBoolReturn()
    {
        return $this->privateBoolean;
    }

    /**
     * Private method with Mixed return.
     */
    private function privateMethodWithMixedReturn()
    {
        return $this->privateMixed;
    }

    /**
     * Private method with Mixed return.
     */
    private function privateMethodWithNullReturn()
    {
        return $this->privateNull;
    }

    /**
     * Private method with return.
     */
    private function privateMethodWithObjectReturn()
    {
        return $this->privateObject;
    }

    /**
     * Private method with compound return.
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