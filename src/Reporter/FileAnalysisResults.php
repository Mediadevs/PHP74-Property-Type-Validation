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
     * The amount analysed nodes in this file.
     *
     * @var int
     */
    private int $nodeCounter = 0;

    /**
     * The amount analysed nodes which contained an issue in this file.
     *
     * @var int
     */
    private int $nodeIssueCounter = 0;

    /**
     * The amount analysed docblocks in this file.
     *
     * @var int
     */
    private int $docblockCounter = 0;

    /**
     * The amount analysed docblocks which contained an issue in this file.
     *
     * @var int
     */
    private int $docblockIssueCounter = 0;

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
     *
     * @return self
     */
    public function addIssue(IssueInterface $issue): self
    {
        $this->issues[] = $issue;

        return $this;
    }

    /**
     * Logging that a node has been analysed.
     *
     * @return void
     */
    public function logAnalysedNode(): void
    {
        $this->nodeCounter++;
    }

    /**
     * Logging that an issue has been encountered whilst analysing a docblock.
     *
     * @return void
     */
    public function logAnalysedNodeIssue(): void
    {
        $this->nodeIssueCounter++;
    }

    /**
     * Logging that a docblock has been analysed.
     *
     * @return void
     */
    public function logAnalysedDocblock(): void
    {
        $this->docblockCounter++;
    }

    /**
     * Logging that an issue has been encountered whilst analysing a docblock.
     *
     * @return void
     */
    public function logAnalysedDocblockIssue(): void
    {
        $this->docblockIssueCounter++;
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
     * @return void
     */
    private function calculate(): void
    {
        $docblockRating = ($this->docblockIssueCounter / $this->docblockIssueCounter);
        $nodeRating     = ($this->nodeIssueCounter / $this->nodeCounter);

        $rating = array(
            'code'      => (float) ($nodeRating * self::WEIGHT_ISSUE_CODE),
            'docblock'  => (float) ($docblockRating * self::WEIGHT_ISSUE_DOCBLOCK),
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
