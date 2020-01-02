<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

abstract class AbstractIssue implements IssueInterface
{
    /**
     * The line where the issue is located.
     *
     * @var string
     */
    private string $line;

    /**
     * The name of the subject which is the origin of the issue.
     *
     * @var string
     */
    private string $name;

    /**
     * The type which the the subject should have.
     *
     * @var string
     */
    private ?string $type;

    /**
     * The parameter which is the origin of the issue.
     *
     * @var string
     */
    private ?string $parameter;

    /**
     * @param string      $line
     * @param string      $name
     * @param string|null $type
     * @param string|null $parameter
     *
     * @return AbstractIssue
     */
    abstract public static function register(
        string $line,
        string $name,
        ?string $type = null,
        ?string $parameter = null
    ): AbstractIssue;
}
