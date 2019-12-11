<?php

namespace Mediadevs\PHPStrictlyTyped;

use Mediadevs\PHPStrictlyTyped\Issues\IssueInterface;

/**
 * Class Report
 * @package Mediadevs\PHPStrictlyTyped
 */
class Report implements \Countable, \Iterator
{
    /**
     * Storage for all the issues, each issue must implement the IssueInterface.
     *
     * @var array
     */
    private array $issues = array();

    /**
     * Adding a new issue to the issue collection.
     *
     * @param IssueInterface $issue
     */
    public function add(IssueInterface $issue): void
    {
        $this->issues[] = $issue;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->issues);
    }

    /**
     * @return mixed|void
     */
    public function next()
    {
        return next($this->issues);
    }

    /**
     * @return int|mixed|string|null
     */
    public function key()
    {
        return key($this->issues);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return false !== $this->current();
    }

    /**
     * @return mixed|void
     */
    public function rewind()
    {
        return reset($this->issues);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->issues);
    }
}
