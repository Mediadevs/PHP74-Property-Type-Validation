<?php

namespace Mediadevs\StrictPHP\Traits;

/**
 * Trait ReportMessageTrait.
 *
 * @package Mediadevs\StrictPHP\Traits
 */
trait ReportMessageTrait
{
    /**
     * Collecting a detailed report of the issue.
     *
     * @return string
     */
    protected function getIssue(): string
    {
        return sprintf(self::MESSAGE, $this->getFile(), $this->getLine(), $this->getColumn(), $this->getType());
    }

    /**
     * Collecting a compact report of the issue.
     *
     * @return string
     */
    protected function getIssueCompact(): string
    {
        return implode(';', [
            self::TYPE,
            $this->getFile(),
            $this->getLine(),
            $this->getColumn(),
            $this->getType(),
        ]);
    }
}
