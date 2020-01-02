<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class UntypedProperty.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class UntypedProperty extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'untyped-property';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'error';
}
