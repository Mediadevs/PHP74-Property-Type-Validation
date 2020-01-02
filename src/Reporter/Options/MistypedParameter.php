<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedParameter.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedParameter extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'mistyped-parameter';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'error';
}
