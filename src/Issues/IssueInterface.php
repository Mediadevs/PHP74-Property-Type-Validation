<?php

namespace Mediadevs\StrictPHP\Issues;

interface IssueInterface
{
    /**
     * Returning the name of the file where the issue has been detected.
     *
     * @return null|string
     */
    public function getFile(): ?string;

    /**
     * Returning the line where the issue has been detected.
     *
     * @return int|null
     */
    public function getLine(): ?int;

    /**
     * Returning the column where the issue has been detected.
     *
     * @return int|null
     */
    public function getColumn(): ?int;

    /**
     * Returning the type which the validation assumed it should have.
     *
     * @return null|string
     */
    public function getAssumedType(): ?string;
}