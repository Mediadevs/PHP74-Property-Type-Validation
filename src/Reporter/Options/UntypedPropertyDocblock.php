<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedPropertyDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedPropertyDocblock extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'untyped-property-docblock';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'warning';

    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@var';
}
