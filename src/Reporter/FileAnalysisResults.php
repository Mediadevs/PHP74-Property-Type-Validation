<?php

namespace Mediadevs\StrictlyPHP\Reporter;

use Mediadevs\StrictlyPHP\Reporter\Options\IssueInterface;

/**
 * Class FileAnalysisResults.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Metrics
 */
class FileAnalysisResults
{
    private const WEIGHT_ISSUE_CODE = 100;
    private const WEIGHT_ISSUE_DOCBLOCK = 75;

    /**
     * The file which the strictness will be analysed from.
     *
     * @var string
     */
    private string $file;

    /**
     * The strictness rating of the subject file.
     * The default value is 100% and the rating will decline if issues are found.
     *
     * @var float
     */
    private float $rating;

    /**
     * All the issues will be stored inside the $issues array. Each issue has several attributes.
     * The attributes for each issue are; "Severity", "Line" and "Message"
     *
     * @var IssueInterface[]
     */
    private array $issues = array();

    /**
     * FileAnalysisResults constructor.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * @param IssueInterface $issue
     */
    public function addIssue(IssueInterface $issue): void
    {
        $this->issues[] = $issue;
    }

    /**
     * Collecting the amount of issues which are located in this file.
     *
     * @return int
     */
    public function getIssueCount(): int
    {
        return (int) count($this->issues);
    }

    /**
     * Collecting the strictness rating for the current file.
     *
     * @return float
     */
    public function getStrictness(): float
    {
        return (float) ($this->rating > 0) ? $this->rating : 0.00;
    }

    /**
     * Calculating the rating of the file, the rating is calculated upon two metrics.
     * - The amount of nodes which can be strictly typed.
     * - The amount of nodes which have been strictly typed.
     *
     * The analysis metrics have a couple of dimensions, the dimensions which are analysed by are;
     *
     * - Return type of the functional code.
     * - Return type hinted inside the docblock.
     *
     * - Parameter type of the functional code.
     * - Parameter type hinted inside the docblock.
     *
     * - Property type of the functional code.
     * - Property type hinted inside the docblock.
     *
     * The impact of the functional code is measured with an heavier rating compared to the docblock rating since
     * the docblock has no real-life impact to the code.
     *
     * @param int $code
     * @param int $docblock
     * @param int $codeIssues
     * @param int $docblockIssues
     *
     * @return void
     */
    public static function calculate(
        int $code,
        int $docblock,
        int $codeIssues,
        int $docblockIssues
    ): void
    {
        $rating = array(
            'code'      => (float) (($codeIssues / $code) * self::WEIGHT_ISSUE_CODE),
            'docblock'  => (float) (($docblockIssues / $docblock) * self::WEIGHT_ISSUE_DOCBLOCK),
        );

        /**
         * TODO: Measure strictness
         * Weight code (100%)
         * Weight docblock (%75)
         *
         * Combine the weight of the code and the docblock and calculate the percentage of strict code in the current
         * file.
         */
    }
}
