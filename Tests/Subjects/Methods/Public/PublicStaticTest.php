<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class PublicStaticTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
 */
class PublicStaticTest
{
    /**
     * Public static method.
     *
     * @return static
     */
    public static function publicStaticMethod(): self
    {
        return static();
    }
}
