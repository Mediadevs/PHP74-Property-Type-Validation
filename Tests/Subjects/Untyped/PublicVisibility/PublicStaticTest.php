<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PublicVisibility;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PublicVisibility
 */
class PublicStaticTest
{
    /**
     * Public static string.
     */
    public static $publicString = 'string';

    /**
     * Public static array.
     */
    public static $publicArray = array('first_item', 'second_item');

    /**
     * Public static integer.
     */
    public static $publicInteger = 100;

    /**
     * Public static float.
     */
    public static $publicFloat = 99.99;

    /**
     * Public static boolean.
     */
    public static $publicBoolean = true;

    /**
     * Public static mixed.
     */
    public static $publicMixed;

    /**
     * Public static null.
     */
    public static $publicNull = null;

    /**
     * Public static object.
     */
    public static $publicObject;

    /**
     * Public static method without parameters.
     *
     * @return self
     */
    public static function publicMethodWithoutParameters()
    {
        return new static();
    }

    /**
     * Public static method with String parameter.
     *
     * @param $string
     *
     * @return self
     */
    public static function publicMethodWithStringParameter($string)
    {
        return new static();
    }

    /**
     * Public static method with Array parameter.
     *
     * @param $array
     *
     * @return self
     */
    public static function publicMethodWithArrayParameter($array)
    {
        return new static();
    }

    /**
     * Public static method with Integer parameter.
     *
     * @param $integer
     *
     * @return self
     */
    public static function publicMethodWithIntegerParameter($integer)
    {
        return new static();
    }

    /**
     * Public static method with Float parameter.
     *
     * @param $float
     *
     * @return self
     */
    public static function publicMethodWithFloatParameter($float)
    {
        return new static();
    }

    /**
     * Public static method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return self
     */
    public static function publicMethodWithBoolParameter($boolean)
    {
        return new static();
    }

    /**
     * Public static method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return self
     */
    public static function publicMethodWithMixedParameter($mixed)
    {
        return new static();
    }

    /**
     * Public static method with Null parameter.
     *
     * @param $null
     *
     * @return self
     */
    public static function publicMethodWithNullParameter($null)
    {
        return new static();
    }

    /**
     * Public static method with Object parameter.
     *
     * @param $typedObject
     *
     * @return self
     */
    public static function publicMethodWithObjectParameter($typedObject)
    {
        return new static();
    }

    /**
     * Public static method with all parameter.
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
    public static function publicMethodWithAllParameter(
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
     * Public static method with self return.
     */
    public static function publicMethodWithSelfReturn()
    {
        return new static();
    }

    /**
     * Public static method with void return.
     */
    public static function publicMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Public static method with return.
     */
    public static function publicMethodWithStringReturn()
    {
        return self::$publicString;
    }

    /**
     * Public static method with return.
     */
    public static function publicMethodWithArrayReturn()
    {
        return self::$publicArray;
    }

    /**
     * Public static method with integer return.
     */
    public static function publicMethodWithIntegerReturn()
    {
        return self::$publicInteger;
    }

    /**
     * Public static method with return.
     */
    public static function publicMethodWithFloatReturn()
    {
        return self::$publicFloat;
    }

    /**
     * Public static method with boolean return.
     */
    public static function publicMethodWithBoolReturn()
    {
        return self::$publicBoolean;
    }

    /**
     * Public static method with Mixed return.
     */
    public static function publicMethodWithMixedReturn()
    {
        return self::$publicMixed;
    }

    /**
     * Public static method with Mixed return.
     */
    public static function publicMethodWithNullReturn()
    {
        return self::$publicNull;
    }

    /**
     * Public static method with return.
     */
    public static function publicMethodWithObjectReturn()
    {
        return self::$publicObject;
    }

    /**
     * Public static method with compound return.
     *
     * @throws \Exception
     */
    public static function publicMethodWithCompoundReturn()
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

    /**
     * PublicStaticTest call static.
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        return $name;
    }

    /**
     * PublicStaticTest set state.
     *
     * @param $properties
     */
    public static function __set_state($properties)
    {
        return new self;
    }
}