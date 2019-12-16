<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class PrivateStaticTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
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
