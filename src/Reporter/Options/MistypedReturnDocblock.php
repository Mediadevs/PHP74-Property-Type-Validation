<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedReturnDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedReturnDocblock extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    protected const IDENTIFIER = 'mistyped-return-docblock';

    /** @var string The severity level this issue is grouped by. */
    protected const SEVERITY = 'warning';

    /** @var string The tag which the docblock uses to hint this subject. */
    protected const DOCBLOCK_TAG = '@return';
}
