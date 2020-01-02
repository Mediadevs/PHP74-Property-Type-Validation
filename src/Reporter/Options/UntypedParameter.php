<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedParameter.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedParameter extends AbstractIssue
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
