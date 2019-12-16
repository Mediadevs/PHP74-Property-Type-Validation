<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class PrivateNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
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
