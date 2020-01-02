<?php

namespace Mediadevs\StrictlyPHP;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * Class Report.
 *
 * @package Mediadevs\StrictlyPHP
 */
class Report implements \Countable, \Iterator
{
    /**
     * Storage for all the reports, each report must extend the AbstractReport.
     *
     * @var array
     */
    private array $reports = array();

    /**
     * Adding a new issue to the issue collection.
     *
     * @param AbstractReport $report
     */
    public function add(AbstractReport $report): void
    {
        $this->reports[] = $report;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->reports);
    }

    /**
     * @return mixed|void
     */
    public function next()
    {
        return next($this->reports);
    }

    /**
     * @return int|mixed|string|null
     */
    public function key()
    {
        return key($this->reports);
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
        return reset($this->reports);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->reports);
    }
}
