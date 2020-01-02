<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedReturnDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedReturnDocblock extends AbstractIssue
{
    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@return';

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
