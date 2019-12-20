<?php

namespace Mediadevs\StrictlyPHP\Strategy;

use Mediadevs\StrictlyPHP\Report;

/**
 * This is the main Analysis class, this will validate the project which this library has been implemented in based
 * upon the configuration. It will validate which analysis types should be ran, based upon that it will generate a
 * report which shows the end-user what they can do to improve the "strictness" of their project.
 *
 * The strategy types are fluid and thorough, it will analyse all nodes and the sub-nodes. All the classes and
 * directories inside the /strategy map will be used and applied for analysis.
 *
 * Class AnalysisStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy
 */
class AnalysisStrategy
{
    /**
     * This is the only method which is will be activated by running the "vendor/bin/strictly-php" command.
     * From here on the analysis will be run and it will return a pretty and clear report to the user.
     *
     * @param string $code
     *
     * @return Report
     */
    public function analyse(string $code): Report
    {

    }

    /**
     * This is the main analysis class, this will contain the main strategy.
     *
     * @param \PhpParser\Node $node
     *
     * @return string
     */
    private function analyseNode(Node $node): string
    {
        // Validating what the current node is, based upon the type the strategy will be adjusted.
        return false;
    }

    /**
     * This method will analyse whether the current node contains a child node. If the parent node has child nodes
     * the strategy will be adjusted and the child nodes will be iterated trough. This is a recursive method.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    private function hasSubNode(Node $node): bool
    {
        return false;
    }
}
