<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class PrivateNormalTest.
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
 */
class PrivateNormalTest
{
    /**
     * Private method.
     *
     * @return $this
     */
    private function privateMethod(): self
    {
        return $this;
    }
}
