<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\Protectedisibility;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\ProtectedVisibility
 */
class ProtectedStaticTest
{
    /**
     * Protected static string.
     */
    protected static $protectedString = 'string';

    /**
     * Protected static array.
     */
    protected static $protectedArray = array('first_item', 'second_item');

    /**
     * Protected static integer.
     */
    protected static $protectedInteger = 100;

    /**
     * Protected static float.
     */
    protected static $protectedFloat = 99.99;

    /**
     * Protected static boolean.
     */
    protected static $protectedBoolean = true;

    /**
     * Protected static mixed.
     */
    protected static $protectedMixed;

    /**
     * Protected static null.
     */
    protected static $protectedNull = null;

    /**
     * Protected static object.
     */
    protected static $protectedObject;

    /**
     * Protected static method without parameters.
     *
     * @return self
     */
    protected static function protectedMethodWithoutParameters()
    {
        return new static();
    }

    /**
     * Protected static method with String parameter.
     *
     * @param $string
     *
     * @return self
     */
    protected static function protectedMethodWithStringParameter($string)
    {
        return new static();
    }

    /**
     * Protected static method with Array parameter.
     *
     * @param $array
     *
     * @return self
     */
    protected static function protectedMethodWithArrayParameter($array)
    {
        return new static();
    }

    /**
     * Protected static method with Integer parameter.
     *
     * @param $integer
     *
     * @return self
     */
    protected static function protectedMethodWithIntegerParameter($integer)
    {
        return new static();
    }

    /**
     * Protected static method with Float parameter.
     *
     * @param $float
     *
     * @return self
     */
    protected static function protectedMethodWithFloatParameter($float)
    {
        return new static();
    }

    /**
     * Protected static method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return self
     */
    protected static function protectedMethodWithBoolParameter($boolean)
    {
        return new static();
    }

    /**
     * Protected static method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return self
     */
    protected static function protectedMethodWithMixedParameter($mixed)
    {
        return new static();
    }

    /**
     * Protected static method with Null parameter.
     *
     * @param $null
     *
     * @return self
     */
    protected static function protectedMethodWithNullParameter($null)
    {
        return new static();
    }

    /**
     * Protected static method with Object parameter.
     *
     * @param $typedObject
     *
     * @return self
     */
    protected static function protectedMethodWithObjectParameter($typedObject)
    {
        return new static();
    }

    /**
     * Protected static method with all parameter.
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
    protected static function protectedMethodWithAllParameter(
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
     * Protected static method with self return.
     */
    protected static function protectedMethodWithSelfReturn()
    {
        return new static();
    }

    /**
     * Protected static method with void return.
     */
    protected static function protectedMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Protected static method with return.
     */
    protected static function protectedMethodWithStringReturn()
    {
        return self::$protectedString;
    }

    /**
     * Protected static method with return.
     */
    protected static function protectedMethodWithArrayReturn()
    {
        return self::$protectedArray;
    }

    /**
     * Protected static method with integer return.
     */
    protected static function protectedMethodWithIntegerReturn()
    {
        return self::$protectedInteger;
    }

    /**
     * Protected static method with return.
     */
    protected static function protectedMethodWithFloatReturn()
    {
        return self::$protectedFloat;
    }

    /**
     * Protected static method with boolean return.
     */
    protected static function protectedMethodWithBoolReturn()
    {
        return self::$protectedBoolean;
    }

    /**
     * Protected static method with Mixed return.
     */
    protected static function protectedMethodWithMixedReturn()
    {
        return self::$protectedMixed;
    }

    /**
     * Protected static method with Mixed return.
     */
    protected static function protectedMethodWithNullReturn()
    {
        return self::$protectedNull;
    }

    /**
     * Protected static method with return.
     */
    protected static function protectedMethodWithObjectReturn()
    {
        return self::$protectedObject;
    }

    /**
     * Protected static method with compound return.
     *
     * @throws \Exception
     */
    protected static function protectedMethodWithCompoundReturn()
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