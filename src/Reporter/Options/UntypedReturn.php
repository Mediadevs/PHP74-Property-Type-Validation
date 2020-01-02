<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedReturn.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedReturn extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    protected const IDENTIFIER = 'untyped-return';

    /** @var string The severity level this issue is grouped by. */
    protected const SEVERITY = 'error';
}
