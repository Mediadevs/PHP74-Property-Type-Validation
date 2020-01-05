<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Class AbstractIssue.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
abstract class AbstractIssue implements IssueInterface
{
    /**
     * The line where the issue is located.
     *
     * @var string
     */
    protected string $line;

    /**
     * The name of the subject which is the origin of the issue.
     *
     * @var string
     */
    protected string $name;

    /**
     * The type which the the subject should have.
     *
     * @var string
     */
    protected ?string $type;

    /**
     * The parameter which is the origin of the issue.
     *
     * @var string
     */
    protected ?string $parameter;

    /**
     * Instance of itself, used for error reporting.
     *
     * @var AbstractIssue
     */
    protected static self $instance;

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
        self::$instance = static();
        self::$instance->line = $line;
        self::$instance->name = $name;

        if ($type !== null) {
            self::$instance->type = $type;
        }

        if ($parameter !== null) {
            self::$instance->parameter = $parameter;
        }

        return self::$instance;
    }

    /**
     * Generating a detailed report with data regarding the issue.
     *
     * @return array
     */
    public static function getDetails(): array
    {
        return [
            'identifier'    => self::IDENTIFIER,
            'severity'      => self::SEVERITY,
            'docblock_tag'  => self::DOCBLOCK_TAG,
            'line'          => self::$instance->line,
            'name'          => self::$instance->name,
            'type'          => self::$instance->type,
            'parameter'     => self::$instance->parameter,
        ];
    }
}
