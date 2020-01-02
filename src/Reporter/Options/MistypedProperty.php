<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class MistypedProperty.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
class MistypedProperty extends AbstractIssue
{
    /** @var string The identifier which the issue is identified by. */
    private const IDENTIFIER = 'mistyped-property';

    /** @var string The severity level this issue is grouped by. */
    private const SEVERITY = 'error';
}
