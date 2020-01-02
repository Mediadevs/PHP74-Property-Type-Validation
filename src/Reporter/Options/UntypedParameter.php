<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedParameter.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedParameter extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'untyped-parameter';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'error';
}
