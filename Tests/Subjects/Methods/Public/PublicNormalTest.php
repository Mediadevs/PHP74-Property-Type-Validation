<?php

namespace Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\PHPStrictlyTyped\Tests\Subjects\Methods
 */
class PublicNormalTest
{
    /**
     * Public method.
     *
     * @return $this
     */
    public function publicMethod(): self
    {
        return $this;
    }
}
