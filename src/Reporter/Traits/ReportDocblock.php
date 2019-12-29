<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Trait ReportDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
trait ReportDocblock
{
    /**
     * Generating a message when the docblock is missing.
     *
     * @return string
     */
    protected function missingDocblock(): string
    {
        return '';
    }

    /**
     * Generating a message when a property is untyped in the docblock.
     *
     * @return string
     */
    protected function untypedProperty(): string
    {
        return '';
    }

    /**
     * Generating a message when a property is mistyped in the docblock.
     *
     * @return string
     */
    protected function mistypedProperty(): string
    {
        return '';
    }

    /**
     * Generating a message when a parameter is untyped in the docblock.
     *
     * @return string
     */
    protected function untypedParameter(): string
    {
        return '';
    }

    /**
     * Generating a message when a parameter is mistyped in the docblock.
     *
     * @return string
     */
    protected function mistypedParameter(): string
    {
        return '';
    }

    /**
     * Generating a message when a return is untyped in the docblock.
     *
     * @return string
     */
    protected function untypedReturn(): string
    {
        return '';
    }

    /**
     * Generating a message when a return is mistyped in the docblock.
     *
     * @return string
     */
    protected function mistypedReturn(): string
    {
        return '';
    }
}