<?php

namespace Mediadevs\PHPStrictlyTyped\Issues\Options;

use Mediadevs\PHPStrictlyTyped\Traits\ReportTrait;
use Mediadevs\PHPStrictlyTyped\Issues\AbstractIssue;
use Mediadevs\PHPStrictlyTyped\Issues\IssueInterface;

/**
 * Class IncorrectPropertyTypeIssue
 * @package Mediadevs\PHPStrictlyTyped\Issues\Options
 */
class UntypedKnownPropertyIssue extends AbstractIssue implements IssueInterface
{
    use ReportTrait;

    private const KNOWN = true; // Whether type it should have is known.
    private const ERROR_CODE = 'untyped-known-property';
    private const ERROR_MESSAGE = 'Invalid property type!';

    /**
     * Registering errors and using a custom set of parameters for each issue.
     *
     * @param string      $file
     * @param int         $line
     * @param int         $column
     * @param string|null $type
     *
     * @return AbstractIssue
     */
    public static function register(string $file, int $line, int $column, ?string $type): parent
    {
        $issue = new self();

        $issue->file = $file;
        $issue->line = $line;
        $issue->column = $column;
        $issue->type = $type;

        return $issue;
    }
}
