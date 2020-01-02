<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Reporter\Options\MistypedParameter;
use Mediadevs\StrictlyPHP\Reporter\Options\MistypedParameterDocblock;
use Mediadevs\StrictlyPHP\Reporter\Options\MistypedReturn;
use Mediadevs\StrictlyPHP\Reporter\Options\MistypedReturnDocblock;
use Mediadevs\StrictlyPHP\Reporter\Options\UntypedParameterDocblock;
use Mediadevs\StrictlyPHP\Reporter\Options\UntypedReturn;
use Mediadevs\StrictlyPHP\Reporter\Options\UntypedReturnDocblock;
use PhpParser\Node;
use Mediadevs\StrictlyPHP\Reporter\FileAnalysisResults;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseReturn;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseParameters;
use Mediadevs\StrictlyPHP\Reporter\Options\UntypedParameter;

/**
 * Class AnalyseFunction.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseFunction extends AbstractAnalyser
{
    use AnalyseReturn;
    use AnalyseDocblock;
    use AnalyseParameters;

    /**
     * AnalyseFunction constructor.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        parent::__construct($file);
    }

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param \PhpParser\Node $node
     * @param array           $filters
     *
     * @return FileAnalysisResults|null
     */
    public function analyse(Node $node, array $filters): ?FileAnalysisResults
    {
        // The analysis filters.
        $analyseFunction                    = (bool) isset($filters['analyse-function']);
        $analyseFunctionParameters          = (bool) isset($filters['analyse-function-parameters']);
        $analyseFunctionReturn              = (bool) isset($filters['analyse-function-return']);
        $analyseFunctionDocblock            = (bool) isset($filters['analyse-function-docblock']);
        $analyseFunctionParametersDocblock  = (bool) isset($filters['analyse-function-parameters-docblock']);
        $analyseFunctionReturnDocblock      = (bool) isset($filters['analyse-function-return-docblock']);
        $analyseFunctionCallable            = (bool) isset($filters['analyse-function-callable']);

        // Analyse both the function and the docblock (global scopes).
        if ($analyseFunction && $analyseFunctionDocblock) {
            // Both global configuration scopes are enabled, the analysis configuration now depends on the
            // specific parameter / return analysis.
            $this->parameterAnalysis($node, $analyseFunctionParameters, $analyseFunctionParametersDocblock);
            $this->returnAnalysis($node, $analyseFunctionReturn, $analyseFunctionReturnDocblock);
        }

        // Analyse only the function and not the docblock (global scopes).
        if ($analyseFunction && !$analyseFunctionDocblock) {
            // Only the function analysis is enabled, the analysis configuration now depends on the
            // specific parameter / return analysis and the docblock analysis is disabled on default.
            $this->parameterAnalysis($node, $analyseFunctionParameters, false);
            $this->returnAnalysis($node, $analyseFunctionReturn, false);
        }

        // Analyse only the docblock and not the function (global scopes).
        if ($analyseFunction && !$analyseFunctionDocblock) {
            // Only the docblock analysis is enabled, the analysis configuration now depends on the
            // specific parameter / return analysis and the function analysis is disabled on default.
            $this->parameterAnalysis($node, false, $analyseFunctionParametersDocblock);
            $this->returnAnalysis($node, false, $analyseFunctionReturnDocblock);
        }

        return $this->issue;
    }

    /**
     * Validating which analysis can be done for the parameters.
     *
     * @param \PhpParser\Node $node
     * @param bool            $analyseFunction
     * @param bool            $analyseDocblock
     *
     * @return void
     */
    private function parameterAnalysis(Node $node, bool $analyseFunction, bool $analyseDocblock): void
    {
        // Storing whether the docblock and function parameter types were set, this is used for analysing whether
        // the parameter types from the docblock and the function match.
        $results = array();

        // Subjects for analysis.
        $docblock           = $analyseDocblock ? $this->getDocblockFromNode($node) : null;
        $docblockParameters = $analyseDocblock ? $this->getParametersFromDocblock($docblock) : array();
        $functionParameters = $analyseFunction ? $this->getParameters($node) : array();

        $line = $node->getStartLine();
        $name = $node->name->name;

        // Whether the function parameter type is set.
        foreach ($functionParameters as $parameter) {
            $this->issue->logAnalysedNode();

            // Storing the parameter type for later analysis to determine whether the types match.
            $results['function_parameters'] = [
                $parameter => $this->getParameterType($parameter),
            ];
        }

        // Whether the docblock parameter type is set.
        foreach ($docblockParameters as $parameter) {
            $this->issue->logAnalysedDocblock();

            // Storing the parameter type for later analysis to determine whether the types match.
            $results['docblock_parameters'] = [
                $parameter => $this->getParameterTypeFromDocblock($docblock, $parameter),
            ];
        }

        // Analysing the function and the docblock for parameters.
        if ($analyseFunction && $analyseDocblock) {
            // Analysing whether the parameter types match up.
            foreach ($results as $group => $parameters) {
                $this->issue->logAnalysedNode();
                $this->issue->logAnalysedDocblock();

                // Iterating through all the parameter and the assigned parameter types.
                foreach ($parameters as $parameter => $type) {
                    $functionParameterExists = (bool) isset($results['function_parameters'][$parameter]);
                    $docblockParameterExists = (bool) isset($results['docblock_parameters'][$parameter]);

                    // Collecting the correct type from the other index.
                    $correctFunctionalType = $results['docblock_parameters'][$parameters];
                    $correctDocblockType = $results['function_parameters'][$parameters];

                    // Validating whether the parameter in both the docblock as the function exists.
                    if ($functionParameterExists && $docblockParameterExists) {
                        if ($results['function_parameters'][$parameters] !== $results['docblock_parameters'][$parameters]) {
                            $this->issue->addIssue(
                                MistypedParameter::register(
                                    $line,
                                    $name,
                                    $correctDocblockType,
                                    $parameter
                                )
                            )->logAnalysedNodeIssue();

                            $this->issue->addIssue(
                                MistypedParameterDocblock::register(
                                    $line,
                                    $name,
                                    $correctFunctionalType,
                                    $parameter
                                )
                            )->logAnalysedDocblockIssue();
                        }

                    } elseif ($functionParameterExists && !$docblockParameterExists) {
                        $this->issue->addIssue(
                            UntypedParameterDocblock::register(
                                $line,
                                $name,
                                $correctFunctionalType,
                                $parameter
                            )
                        )->logAnalysedDocblockIssue();

                    } elseif (!$functionParameterExists && $docblockParameterExists) {
                        $this->issue->addIssue(
                            UntypedParameter::register(
                                $line,
                                $name,
                                $correctDocblockType,
                                $parameter
                            )
                        )->logAnalysedNodeIssue();
                    }
                }
            }
        }

        // Analysing the function docblock for parameters.
        if (!$analyseFunction && $analyseDocblock) {
            $this->issue->logAnalysedDocblock();

            foreach ($results['docblock_parameters'] as $parameter => $type) {
                $correctType = $results['function_parameters'][$parameter];

                if (!isset($docblockParameterType)) {
                    $this->issue->addIssue(
                        UntypedParameterDocblock::register($line, $name, $correctType, $parameter)
                    )->logAnalysedDocblockIssue();
                }
            }
        }

        // Analysing the function for parameters.
        if ($analyseFunction && !$analyseDocblock) {
            $this->issue->logAnalysedNode();

            foreach ($results['function_parameters'] as $parameter => $type) {
                $correctType = $results['docblock_parameters'][$parameter];

                if (!isset($parameterType)) {
                    $this->issue->addIssue(
                        UntypedParameter::register($line, $name,$correctType, $parameter)
                    )->logAnalysedNodeIssue();
                }
            }
        }
    }

    /**
     * Validating which analysis can be done for the parameters.
     *
     * @param \PhpParser\Node $node
     * @param bool            $analyseFunction
     * @param bool            $analyseDocblock
     *
     * @return void
     */
    private function returnAnalysis(Node $node, bool $analyseFunction, bool $analyseDocblock): void
    {
        // Subjects for analysis.
        $functionReturnType = $analyseFunction ? $this->getReturnType($node) : null;
        $docblock           = $analyseDocblock ? $this->getDocblockFromNode($node) : null;
        $docblockReturnType = $analyseDocblock ? $this->getReturnTypeFromDocblock($docblock) : null;

        $line = $node->getStartLine();
        $name = $node->name->name;

        // Analysing the function and the docblock for the return.
        if ($analyseFunction && $analyseDocblock) {
            $this->issue->logAnalysedNode();
            $this->issue->logAnalysedDocblock();

            if (isset($functionReturnType) && isset($docblockReturnType)) {
                if ($functionReturnType !== $docblockReturnType) {
                    $this->issue->addIssue(
                        MistypedReturn::register($line, $name, $docblockReturnType)
                    )->logAnalysedNodeIssue();

                    $this->issue->addIssue(
                        MistypedReturnDocblock::register($line, $name, $functionReturnType)
                    )->logAnalysedDocblockIssue();
                }

            } elseif (!isset($functionReturnType) && isset($docblockReturnType)) {
                $this->issue->addIssue(
                    UntypedReturn::register($line, $name, $functionReturnType)
                )->logAnalysedNodeIssue();

            } elseif (isset($functionReturnType) && isset($docblockReturnType)) {
                $this->issue->addIssue(
                    UntypedReturnDocblock::register($line, $name, $functionReturnType)
                )->logAnalysedDocblockIssue();

            } else {
                $this->issue->addIssue(
                    UntypedReturn::register($line, $name, $docblockReturnType)
                )->logAnalysedNodeIssue();

                $this->issue->addIssue(
                    UntypedReturnDocblock::register($line, $name, $functionReturnType)
                )->logAnalysedDocblockIssue();
            }
        }

        // Analysing the function docblock for the return.
        if (!$analyseFunction && $analyseDocblock) {
            $this->issue->logAnalysedDocblock();

            if (isset($docblockReturnType)) {
                $this->issue->addIssue(
                    UntypedReturnDocblock::register($line, $name, $docblockReturnType)
                )->logAnalysedDocblockIssue();
            }
        }

        // Analysing the function for the return.
        if ($analyseFunction && !$analyseDocblock) {
            $this->issue->logAnalysedNode();

            if (isset($returnType)) {
                $this->issue->addIssue(
                    UntypedReturn::register($line, $name, $returnType)
                )->logAnalysedNodeIssue();
            }
        }
    }
}
