<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
 */
class ProtectedStaticTest
{
    /**
     * Protected static method.
     *
     * @return static
     */
    protected static function protectedStaticMethod(): self
    {
        return static();
    }
}
