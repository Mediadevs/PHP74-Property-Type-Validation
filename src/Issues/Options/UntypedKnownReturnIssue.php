<?php

namespace Mediadevs\StrictPHP\Issues\Options;

use Mediadevs\StrictPHP\Issues\AbstractIssue;
use Mediadevs\StrictPHP\Issues\IssueInterface;

/**
 * Class UntypedKnownReturnIssue
 * @package Mediadevs\StrictPHP\Issues\Options
 */
class UntypedKnownReturnIssue extends AbstractIssue implements IssueInterface
{
    private const TYPE = 'untyped-known-return';

    /*
     * - %s1 file
     * - %s2 line
     * - %s3 column
     */
    private const MESSAGE = 'Missing return type declaration! Location: %s at %s:%s. Type must be "%s"';

    /**
     * Creating a new issue based on the collected values.
     *
     * @param string $file
     * @param int $line
     * @param int $column
     * @param string $assumedType
     *
     * @return static
     */
    public static function create(string $file, int $line, int $column, string $assumedType): parent
    {
        $issue = new self;

        $issue->file = $file;
        $issue->line = $line;
        $issue->column = $column;
        $issue->assumedType = $assumedType;

        return $issue;
    }
}

