<?php

namespace Mediadevs\PropertyAnalyser\Issues;

class UntypedPropertyIssue extends AbstractIssue
{
    private const TYPE = 'untyped-property';

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
    public static function create(string $file, int $line, int $column, string $assumedType): self
    {
        $issue = new self;

        $issue->file = $file;
        $issue->line = $line;
        $issue->column = $column;
        $issue->assumedType = $assumedType;

        return $issue;
    }
}