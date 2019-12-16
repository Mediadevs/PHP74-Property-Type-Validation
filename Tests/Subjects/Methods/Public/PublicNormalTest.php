<?php

namespace Mediadevs\StrictlyPHP\Tests\Subjects\Methods;

/**
 * Class PublicNormalTest.
 *
 * @package Mediadevs\StrictlyPHP\Tests\Subjects\Methods
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
