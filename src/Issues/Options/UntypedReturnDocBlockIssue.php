<?php

namespace Mediadevs\StrictlyPHP\Issues\Options;

use Mediadevs\StrictlyPHP\Traits\ReportTrait;
use Mediadevs\StrictlyPHP\Issues\AbstractIssue;
use Mediadevs\StrictlyPHP\Issues\IssueInterface;

/**
 * Class UntypedReturnDocBlockIssue.
 *
 * @package Mediadevs\StrictlyPHP\Issues\Options
 */
class UntypedReturnDocBlockIssue extends AbstractIssue implements IssueInterface
{
    use ReportTrait;

    private const ERROR_CODE = 'untyped-return-docblock';
    private const ERROR_MESSAGE = 'Invalid or missing return type in docblock!';

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