<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PrivateVisibility;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PrivateVisibility
 */
class PrivateStaticTest
{
    /**
     * Private static string.
     */
    private static $privateString = 'string';

    /**
     * Private static array.
     */
    private static $privateArray = array('first_item', 'second_item');

    /**
     * Private static integer.
     */
    private static $privateInteger = 100;

    /**
     * Private static float.
     */
    private static $privateFloat = 99.99;

    /**
     * Private static boolean.
     */
    private static $privateBoolean = true;

    /**
     * Private static mixed.
     */
    private static $privateMixed;

    /**
     * Private static null.
     */
    private static $privateNull = null;

    /**
     * Private static object.
     */
    private static $privateObject;

    /**
     * Private static method without parameters.
     *
     * @return self
     */
    private static function privateMethodWithoutParameters()
    {
        return new static();
    }

    /**
     * Private static method with String parameter.
     *
     * @param $string
     *
     * @return self
     */
    private static function privateMethodWithStringParameter($string)
    {
        return new static();
    }

    /**
     * Private static method with Array parameter.
     *
     * @param $array
     *
     * @return self
     */
    private static function privateMethodWithArrayParameter($array)
    {
        return new static();
    }

    /**
     * Private static method with Integer parameter.
     *
     * @param $integer
     *
     * @return self
     */
    private static function privateMethodWithIntegerParameter($integer)
    {
        return new static();
    }

    /**
     * Private static method with Float parameter.
     *
     * @param $float
     *
     * @return self
     */
    private static function privateMethodWithFloatParameter($float)
    {
        return new static();
    }

    /**
     * Private static method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return self
     */
    private static function privateMethodWithBoolParameter($boolean)
    {
        return new static();
    }

    /**
     * Private static method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return self
     */
    private static function privateMethodWithMixedParameter($mixed)
    {
        return new static();
    }

    /**
     * Private static method with Null parameter.
     *
     * @param $null
     *
     * @return self
     */
    private static function privateMethodWithNullParameter($null)
    {
        return new static();
    }

    /**
     * Private static method with Object parameter.
     *
     * @param $typedObject
     *
     * @return self
     */
    private static function privateMethodWithObjectParameter($typedObject)
    {
        return new static();
    }

    /**
     * Private static method with all parameter.
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
     * @return self
     */
    private static function privateMethodWithAllParameter(
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
        return new static();
    }

    /**
     * Private static method with self return.
     */
    private static function privateMethodWithSelfReturn()
    {
        return new static();
    }

    /**
     * Private static method with void return.
     */
    private static function privateMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Private static method with return.
     */
    private static function privateMethodWithStringReturn()
    {
        return self::$privateString;
    }

    /**
     * Private static method with return.
     */
    private static function privateMethodWithArrayReturn()
    {
        return self::$privateArray;
    }

    /**
     * Private static method with integer return.
     */
    private static function privateMethodWithIntegerReturn()
    {
        return self::$privateInteger;
    }

    /**
     * Private static method with return.
     */
    private static function privateMethodWithFloatReturn()
    {
        return self::$privateFloat;
    }

    /**
     * Private static method with boolean return.
     */
    private static function privateMethodWithBoolReturn()
    {
        return self::$privateBoolean;
    }

    /**
     * Private static method with Mixed return.
     */
    private static function privateMethodWithMixedReturn()
    {
        return self::$privateMixed;
    }

    /**
     * Private static method with Mixed return.
     */
    private static function privateMethodWithNullReturn()
    {
        return self::$privateNull;
    }

    /**
     * Private static method with return.
     */
    private static function privateMethodWithObjectReturn()
    {
        return self::$privateObject;
    }

    /**
     * Private static method with compound return.
     *
     * @throws \Exception
     */
    private static function privateMethodWithCompoundReturn()
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