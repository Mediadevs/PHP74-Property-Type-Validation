<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class ProtectedNormalTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
 */
class ProtectedNormalTest
{
    /**
     * Protected method.
     *
     * @return $this
     */
    protected function protectedMethod(): self
    {
        return $this;
    }
}
