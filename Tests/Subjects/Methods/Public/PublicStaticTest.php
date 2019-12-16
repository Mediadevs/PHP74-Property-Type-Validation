<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class PublicStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
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
