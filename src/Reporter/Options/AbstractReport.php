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
    protected static string $file;

    /**
     * The line where the issue has been detected.
     *
     * @var int
     */
    protected static int $line;

    /**
     * The column where the issue has been detected.
     *
     * @var int
     */
    protected static int $column;

    /**
     * The name of the subject, this can be a property or a method.
     *
     * @var string
     */
    protected static string $name;

    /**
     * The parameter which the analyser creates a report about.
     *
     * @var string
     */
    protected static string $parameter;


    /**
     * The type that the subject should have.
     *
     * @var string
     */
    protected static string $type;
}
