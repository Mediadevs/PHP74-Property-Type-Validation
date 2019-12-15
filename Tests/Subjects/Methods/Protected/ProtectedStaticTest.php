<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class ProtectedStaticTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
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
