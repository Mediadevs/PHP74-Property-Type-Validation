<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedParameterDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedParameterDocblock extends AbstractIssue
{
    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@param';

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
