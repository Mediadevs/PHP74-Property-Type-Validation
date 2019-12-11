<?php

namespace Mediadevs\PHPStrictlyTyped\Traits;

/**
 * Trait ReportTrait
 * @package Mediadevs\PHPStrictlyTyped\Traits
 */
trait ReportTrait
{
    /**
     * The location where the issue is found.
     *
     * @var string
     */
    private string $location = 'In file: "%s" at "%s:%s". Expected type: "%s"';

    /**
     * Collecting a detailed report of the issue.
     *
     * @return string
     */
    protected function getIssue(): string
    {
        return sprintf(
            self::ERROR_MESSAGE . ' ' . $this->location,
            $this->getFile(),
            $this->getLine(),
            $this->getColumn(),
            $this->getType()
        );
    }

    /**
     * Collecting a compact report of the issue.
     *
     * @return string
     */
    protected function getIssueCompact(): string
    {
        return implode(';', [
            self::ERROR_CODE,
            $this->getFile(),
            $this->getLine(),
            $this->getColumn(),
            $this->getType()
        ]);
    }
}
