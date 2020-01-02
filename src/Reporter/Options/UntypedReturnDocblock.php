<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedReturnDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedReturnDocblock extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'untyped-return-docblock';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'warning';

    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@return';
}
