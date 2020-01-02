<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedPropertyDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedPropertyDocblock extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'mistyped-property-type';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'warning';

    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@var';
}
