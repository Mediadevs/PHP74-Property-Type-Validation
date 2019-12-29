<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Class ReportLocation.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
Trait ReportLocation
{
    /**
     * Generating a message to report where issue resides.
     *
     * @return string
     */
    protected function location(): string
    {
        return '';
    }
}