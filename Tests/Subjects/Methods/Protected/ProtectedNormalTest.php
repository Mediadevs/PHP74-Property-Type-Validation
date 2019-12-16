<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class ProtectedNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
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
