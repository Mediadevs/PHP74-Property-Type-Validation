<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedReturn.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedReturn extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'mistyped-return';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'error';
}
