<?php

namespace Mediadevs\PHPStrictlyTyped\Issues;

/**
 * Class AbstractIssue
 * @package Mediadevs\PHPStrictlyTyped\Issues
 */
abstract class AbstractIssue
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
     * @var string|null
     */
    protected ?string $type;

    /**
     * AbstractIssue constructor.
     */
    protected function __construct()
    {
    }

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
    public static abstract function register(string $file, int $line, int $column, ?string $type): self;

    /**
     * Returning the name of the file where the issue has been detected.
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Returning the line where the issue has been detected.
     *
     * @return int
     */
    public function getLine():?int
    {
        return $this->line;
    }

    /**
     * Returning the column where the issue has been detected.
     *
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * Returning the type which the validation assumed it should have.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
