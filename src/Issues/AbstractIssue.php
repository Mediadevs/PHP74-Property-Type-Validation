<?php

namespace Mediadevs\PropertyAnalyser\Issues;

abstract class AbstractIssue implements IssueInterface
{
    /**
     * The name of the file where the issue has been detected.
     *
     * @var string
     */
    protected string $file;

    /**
     * The line where the issue has been detected.
     *
     * @var int
     */
    protected int $line;

    /**
     * The column where the issue has been detected.
     *
     * @var int
     */
    protected int $column;

    /**
     * The type which the validation assumed it should have.
     *
     * @var string
     */
    protected string $assumedType;

    /**
     * AbstractIssue constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Returning the name of the file where the issue has been detected.
     *
     * @return null|string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * Returning the line where the issue has been detected.
     *
     * @return int|null
     */
    public function getLine(): ?int
    {
        return $this->line;
    }

    /**
     * Returning the column where the issue has been detected.
     *
     * @return int|null
     */
    public function getColumn(): ?int
    {
        return $this->column;
    }

    /**
     * Returning the type which the validation assumed it should have.
     *
     * @return null|string
     */
    public function getAssumedType(): ?string
    {
        return $this->assumedType;
    }
}