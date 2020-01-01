<?php

namespace Mediadevs\StrictlyPHP\Analyser;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\StrictlyConfiguration;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseMethod;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseFunction;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseProperty;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseMagicMethod;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseMethodDocblock;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseFunctionDocblock;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalysePropertyDocblock;
use Mediadevs\StrictlyPHP\Analyser\Options\AnalyseMagicMethodDocblock;

class Analysis
{
    /** @var array all the analysers which can be applied */
    private const ANALYSER_OPTIONS = array(
        // Function Analysers
        'analyse-function'                          => AnalyseFunction::class,
        'analyse-function-parameters'               => AnalyseFunction::class,
        'analyse-function-return'                   => AnalyseFunction::class,
        'analyse-function-parameters-docblock'      => AnalyseFunctionDocblock::class,
        'analyse-function-return-docblock'          => AnalyseFunctionDocblock::class,
        'analyse-function-docblock'                 => AnalyseFunctionDocblock::class,
        // Magic Method Analysers
        'analyse-magic-method'                      => AnalyseMagicMethod::class,
        'analyse-magic-method-parameters'           => AnalyseMagicMethod::class,
        'analyse-magic-method-return'               => AnalyseMagicMethod::class,
        'analyse-magic-method-parameters-docblock'  => AnalyseMagicMethodDocblock::class,
        'analyse-magic-method-return-docblock'      => AnalyseMagicMethodDocblock::class,
        'analyse-magic-method-docblock'             => AnalyseMagicMethodDocblock::class,
        // Method Analysers
        'analyse-method'                            => AnalyseMethod::class,
        'analyse-method-parameters'                 => AnalyseMethod::class,
        'analyse-method-return'                     => AnalyseMethod::class,
        'analyse-method-parameters-docblock'        => AnalyseMethodDocblock::class,
        'analyse-method-return-docblock'            => AnalyseMethodDocblock::class,
        'analyse-method-docblock'                   => AnalyseMethodDocblock::class,
        // Property Analysers
        'analyse-property'                          => AnalyseProperty::class,
        'analyse-property-docblock'                 => AnalysePropertyDocblock::class,
        'analyse-property-assignable'               => AnalyseProperty::class,
    );

    /** @var array All the names of the magic methods. */
    private const MAGIC_METHODS = array(
        '__construct',
        '__destruct',
        '__call',
        '__callStatic',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__sleep',
        '__wakeup',
        '__toString',
        '__invoke',
        '__set_state',
        '__clone',
        '__debugInfo'
    );

    /**
     * All the report / issues will be parsed through this class.
     *
     * @var Report
     */
    private Report $report;

    /**
     * Analysis constructor.
     */
    public function __construct()
    {
        $this->report = new Report();
    }

    /**
     * Analysing the code based upon the given filters.
     *
     * @param Node $node
     *
     * @return Report
     */
    public function analyse(Node $node): Report
    {
        $analysers = (new StrictlyConfiguration())->getAnalysers();

        $parser = (new ParserFactory)->create(ParserFactory::ONLY_PHP7);
        $nodes = $parser->parse($this->code);

        // Iterating through all the nodes and validating whether the analyser exists.
        foreach ($nodes as $node) {
            foreach ($analysers as $analyser) {
                if (in_array(self::ANALYSER_OPTIONS, $analyser)) {
                    $this->analyseNode($node);
                } else {
                    exit('Invalid analyser option!');
                }
            }
        }

        return $this->report;
    }

    /**
     * Analysing the node and applying a strategy based upon the given analyser.
     *
     * @param \PhpParser\Node $node
     */
    public function analyseNode(Node $node): void
    {
        // Method analysis.
        if ($node instanceof Node\Stmt\ClassMethod) {

        }

        // Magic method analysis.
        if ($node instanceof Node\Stmt\ClassMethod || in_array($node->name->name, self::MAGIC_METHODS)) {

        }

        // Function analysis.
        if ($node instanceof Node\Stmt\Function_) {

        }

        // Expression analysis.
        if ($node instanceof Node\Stmt\Expression) {

        }

        // If the node is a method call or a function call.
        if ($node instanceof Node\Expr\MethodCall || $node instanceof Node\Expr\FuncCall) {

        }

        // Whether the node has sub nodes.
        if (isset($node->stmts) && count($node->stmts) > 0) {
            foreach ($node->stmts as $subNode) {
                // Running a recursive call for the sub node.
                $this->analyseNode($subNode);
            }
        }
    }
}
