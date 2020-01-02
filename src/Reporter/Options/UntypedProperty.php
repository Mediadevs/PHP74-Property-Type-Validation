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
     * @return string
     */
    public function register(string $line, string $name, ?string $type = null, ?string $parameter = null): string
    {
        // TODO: Implement register() method.

        return '';
    }
}
