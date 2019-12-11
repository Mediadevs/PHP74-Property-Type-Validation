<?php

namespace Mediadevs\StrictPHP;

use Mediadevs\StrictPHP\Issues\IssueInterface;

/**
 * Class Report
 * @package Mediadevs\StrictPHP
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
     * @inheritDoc
     */
    public function current()
    {
        return current($this->issues);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        return next($this->issues);
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return key($this->issues);
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return false !== $this->current();
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        return reset($this->issues);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->issues);
    }
}
