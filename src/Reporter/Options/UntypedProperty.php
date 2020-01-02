<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedProperty.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedProperty extends AbstractIssue
{
    /**
     * @param string      $line
     * @param string      $name
     * @param string|null $type
     * @param string|null $parameter
     *
     * @return AbstractIssue
     */
    public static function register(
        string $line,
        string $name,
        ?string $type = null,
        ?string $parameter = null
    ): AbstractIssue
    {
        // TODO: Implement register() method.

        return new self();
    }
}
