<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedParameterDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedParameterDocblock extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'mistyped-parameter-docblock';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'warning';

    /** @var string The tag which the docblock uses to hint this subject. */
    private const DOCBLOCK_TAG = '@param';
}
