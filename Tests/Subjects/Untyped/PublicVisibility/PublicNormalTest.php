<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PublicVisibility;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Untyped\PublicVisibility
 */
class PublicNormalTest
{
    /**
     * Public string.
     */
    public $publicString = 'string';

    /**
     * Public array.
     */
    public $publicArray = array('first_item', 'second_item');

    /**
     * Public integer.
     */
    public $publicInteger = 100;

    /**
     * Public float.
     */
    public $publicFloat = 99.99;

    /**
     * Public boolean.
     */
    public $publicBoolean = true;

    /**
     * Public mixed.
     */
    public $publicMixed;

    /**
     * Public null.
     */
    public $publicNull = null;

    /**
     * Public object.
     */
    public $publicObject;

    /**
     * Public method without parameters.
     *
     * @return $this
     */
    public function publicMethodWithoutParameters()
    {
        return $this;
    }

    /**
     * Public method with String parameter.
     *
     * @param $string
     *
     * @return $this
     */
    public function publicMethodWithStringParameter($string)
    {
        return $this;
    }

    /**
     * Public method with Array parameter.
     *
     * @param $array
     *
     * @return $this
     */
    public function publicMethodWithArrayParameter($array)
    {
        return $this;
    }

    /**
     * Public method with Integer parameter.
     *
     * @param $integer
     *
     * @return $this
     */
    public function publicMethodWithIntegerParameter($integer)
    {
        return $this;
    }

    /**
     * Public method with Float parameter.
     *
     * @param $float
     *
     * @return $this
     */
    public function publicMethodWithFloatParameter($float)
    {
        return $this;
    }

    /**
     * Public method with Boolean parameter.
     *
     * @param $boolean
     *
     * @return $this
     */
    public function publicMethodWithBoolParameter($boolean)
    {
        return $this;
    }

    /**
     * Public method with Mixed parameter.
     *
     * @param $mixed
     *
     * @return $this
     */
    public function publicMethodWithMixedParameter($mixed)
    {
        return $this;
    }

    /**
     * Public method with Null parameter.
     *
     * @param $null
     *
     * @return $this
     */
    public function publicMethodWithNullParameter($null)
    {
        return $this;
    }

    /**
     * Public method with Object parameter.
     *
     * @param $typedObject
     *
     * @return $this
     */
    public function publicMethodWithObjectParameter($typedObject)
    {
        return $this;
    }

    /**
     * Public method with all parameter.
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
    public function publicMethodWithAllParameter(
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
     * Public method with self return.
     */
    public function publicMethodWithSelfReturn()
    {
        return $this;
    }

    /**
     * Public method with void return.
     */
    public function publicMethodWithVoidReturn()
    {
        return;
    }

    /**
     * Public method with return.
     */
    public function publicMethodWithStringReturn()
    {
        return $this->publicString;
    }

    /**
     * Public method with return.
     */
    public function publicMethodWithArrayReturn()
    {
        return $this->publicArray;
    }

    /**
     * Public method with integer return.
     */
    public function publicMethodWithIntegerReturn()
    {
        return $this->publicInteger;
    }

    /**
     * Public method with return.
     */
    public function publicMethodWithFloatReturn()
    {
        return $this->publicFloat;
    }

    /**
     * Public method with boolean return.
     */
    public function publicMethodWithBoolReturn()
    {
        return $this->publicBoolean;
    }

    /**
     * Public method with Mixed return.
     */
    public function publicMethodWithMixedReturn()
    {
        return $this->publicMixed;
    }

    /**
     * Public method with Mixed return.
     */
    public function publicMethodWithNullReturn()
    {
        return $this->publicNull;
    }

    /**
     * Public method with return.
     */
    public function publicMethodWithObjectReturn()
    {
        return $this->publicObject;
    }

    /**
     * Public method with compound return.
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
     * @param $name
     */
    public function __construct($name)
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
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        return $name;
    }

    /**
     * PublicNormalTest get.
     *
     * @param $name
     */
    public function __get($name)
    {
        return false;
    }

    /**
     * PublicNormalTest set.
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
    }

    /**
     * PublicNormalTest isset.
     *
     * @param $name
     */
    public function __isset($name)
    {
        return false;
    }

    /**
     * PublicNormalTest unset.
     *
     * @param $name
     */
    public function __unset($name)
    {
    }

    /**
     * PublicNormalTest sleep.
     */
    public function __sleep()
    {
        return array();
    }

    /**
     * PublicNormalTest wakeup.
     */
    public function __wakeup()
    {
    }

    /**
     * PublicNormalTest to string.
     */
    public function __toString()
    {
        return $this->publicString;
    }

    /**
     * PublicNormalTest invoke.
     *
     * @param $flag
     */
    public function __invoke($flag)
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
     */
    public function __debugInfo()
    {
        return array();
    }
}