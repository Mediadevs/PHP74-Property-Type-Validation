<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class PrivateStaticTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
 */
class PrivateStaticTest
{
    /**
     * Private static method.
     *
     * @return static
     */
    private static function privateStaticMethod(): self
    {
        return static();
    }
}
