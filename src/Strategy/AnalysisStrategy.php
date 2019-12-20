<?php

namespace Mediadevs\StrictlyPHP\Strategy;

use PhpParser\Node;
use PhpParser\ParserFactory;
use PhpParser\Node\Identifier;
use Mediadevs\StrictlyPHP\Report;
use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlockFactory;
use Mediadevs\StrictlyPHP\Strategy\CodeAnalysisStrategy\NodeStrategy;
use Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy\TagStrategy;
use Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy\InheritDocStrategy;
use \Mediadevs\StrictlyPHP\Strategy\CodeAnalysisStrategy\TypeStrategy as CodeTypeStrategy;
use Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy\TypeStrategy as DocTypeStrategy;

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
     * The code which is subject to analysis.
     *
     * @var string
     */
    private string $code;

    /**
     * The instance of report where all the errors will be generated with.
     *
     * @var Report
     */
    private Report $report;

    /**
     * This class will handle all the docblocks.
     *
     * @var DocBlockFactory
     */
    private DocBlockFactory $docBlockFactory;

    /**
     * The strategy for parsing the nodes.
     *
     * @var NodeStrategy
     */
    private NodeStrategy $nodeStrategy;

    /**
     * The strategy for parsing the types.
     *
     * @var CodeTypeStrategy
     */
    private CodeTypeStrategy $typeStrategy;

    /**
     * AnalysisStrategy constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
        $this->report = new Report();
        $this->docBlockFactory = DocBlockFactory::createInstance();

        // PHP-Parser Strategies
        $this->nodeStrategy = new NodeStrategy();
        $this->typeStrategy = new CodeTypeStrategy();
    }

    /**
     * This is the only method which is will be activated by running the "vendor/bin/strictly-php" command.
     * From here on the analysis will be run and it will return a pretty and clear report to the user.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        $parser = (new ParserFactory())->create(ParserFactory::ONLY_PHP7);
        $nodes = $parser->parse($this->code);

        foreach ($nodes as $node) {
            $this->analyseNode($node);
        }

        return $this->report;
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
        if ($this->nodeStrategy->isClass($node)) {
            // No strategy
        }

        if ($this->nodeStrategy->isProperty($node)) {

        }

        if ($this->nodeStrategy->isFunctionLike($node)) {
            // Todo: Function type; methods / functions strategy
        }

        if ($this->nodeStrategy->isMethod($node)) {
            // Todo: Method strategy
        }

        if ($this->nodeStrategy->isMethodCall($node)) {
            // Todo: Method call strategy
        }

        if ($this->nodeStrategy->isFunction($node)) {
            // Todo: Function  strategy
        }

        if ($this->nodeStrategy->isFunctionCall($node)) {
            // Todo: Function call strategy
        }

        if ($this->nodeStrategy->isMagicMethod($node)) {
            // Todo: Magic method strategy
        }

        if ($this->nodeStrategy->isParameter($node)) {
            // Todo: Parameter strategy
        }

        if ($this->nodeStrategy->isExpression($node)) {
            // Todo: Expression strategy
        }

        if ($this->hasSubNode($node)) {
            foreach ($node->stmts as $subNode) {
                // Analysing the child node.
                $this->analyseNode($subNode);
            }
        }

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
        return (bool) (isset($node->stmts)) ? true : false;
    }

    /**
     * This method transforms the docblock string from the php-parser into a DocBlock instance
     * The DocBlock instance will be used to analyse the docblock to determine whether it matches
     * the configured analysis.
     *
     * @param string|null $docComment
     *
     * @return \phpDocumentor\Reflection\DocBlock|null
     */
    private function getDocBlock(?string $docComment): ?DocBlock
    {
        try {
            return $this->docBlockFactory->create($docComment);
        } catch (\Exception $e) {
            // Something wen't wrong. Analysis will continue without documentation.
        }

        return null;
    }
}
