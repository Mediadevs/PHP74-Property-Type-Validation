<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

abstract class AbstractIssue implements IssueInterface
{
    /**
     * The line where the issue is located.
     *
     * @var string
     */
    protected static string $line;

    /**
     * The name of the subject which is the origin of the issue.
     *
     * @var string
     */
    protected static string $name;

    /**
     * The type which the the subject should have.
     *
     * @var string
     */
    protected static ?string $type;

    /**
     * The parameter which is the origin of the issue.
     *
     * @var string
     */
    protected static ?string $parameter;

    /**
     * @param string      $line
     * @param string      $name
     * @param string|null $type
     * @param string|null $parameter
     *
     * @return AbstractIssue
     */
    public static function register(
        string $line,
        string $name,
        ?string $type = null,
        ?string $parameter = null
    ): AbstractIssue
    {
        self::$line = $line;
        self::$name = $name;

        if ($type !== null) {
            self::$type = $type;
        }

        if ($parameter !== null) {
            self::$parameter = $parameter;
        }

        return new static();
    }
}
