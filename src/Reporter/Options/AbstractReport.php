<?php

namespace Mediadevs\StrictlyPHP\Reporter;

/**
 * Class AbstractReport.
 *
 * @package Mediadevs\StrictlyPHP\Issues
 */
abstract class AbstractReport
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
     * The subject which can property or function or any specific node.
     *
     * @var string
     */
    protected string $subject;

    /**
     * The name of the subject, this can be a property or a method.
     *
     * @var string
     */
    protected string $name;

    /**
     * The parameter which the analyser creates a report about.
     *
     * @var string
     */
    protected string $parameter;

    /**
     * The type that the subject should have.
     *
     * @var string
     */
    protected string $type;

    /**
     * Creating a report based upon the issue, each report has a can import a specific set of traits
     * to match it's own properties.
     *
     * @return string
     */
    public static abstract function create(): string;

    /**
     * @param string $file
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @param int $line
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setLine(int $line): self
    {
        $this->line = $line;

        return $this;
    }

    /**
     * @param int $column
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setColumn(int $column): self
    {
        $this->column = $column;

        return $this;
    }

    /**
     * @param string $subject
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $parameter
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setParameter(string $parameter): self
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return \Mediadevs\StrictlyPHP\Reporter\AbstractReport
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
