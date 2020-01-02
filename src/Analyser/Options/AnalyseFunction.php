<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Reporter\Options\Parameter\MistypedParameter;
use Mediadevs\StrictlyPHP\Reporter\Options\ReportUntyped;
use PhpParser\Node;
use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseReturn;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseParameters;

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
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param \PhpParser\Node $node
     * @param array           $filters
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    public function analyse(Node $node, array $filters): ?Report
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

        return $this->report;
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
        $functionParameters = $analyseFunction ? $this->getParameters($node) : array();
        $docblock           = $analyseDocblock ? $this->getDocblockFromNode($node) : null;
        $docblockParameters = $analyseDocblock ? $this->getParametersFromDocblock($docblock) : array();

        // Analysing the function and the docblock for parameters.
        if ($analyseFunction && $analyseDocblock) {
            // Whether the function parameter type is set.
            foreach ($functionParameters as $parameter) {
                $functionParameterType = $this->getParameterType($parameter);

                if (!isset($functionParameterType)) {
                    $issue = (new MistypedParameter())
                        ->setName($node->name->name)
                        ->setLine($node->name->getStartLine())
                        ->setParameter($parameter->var->name)
                        ->setType($functionParameterType);

                    $this->report->add($issue->getMessage());
                }

                // Storing the parameter type for later analysis to determine whether the types match.
                $results['function_parameters'] = [
                    $parameter => $functionParameterType,
                ];
            }

            // Whether the docblock parameter type is set.
            foreach ($docblockParameters as $parameter) {
                $docblockParameterType = $this->getParameterTypeFromDocblock($docblock, $parameter);

                if (!isset($docblockParameterType)) {
                    $this->report->add(null, /* (UntypedDocblockParameter) */);
                }

                // Storing the parameter type for later analysis to determine whether the types match.
                $results['docblock_parameters'] = [
                    $parameter => $docblockParameterType,
                ];
            }

            // Analysing whether the parameter types match up.
            foreach ($results as $group => $parameters) {
                $functionParameterExists = (bool) isset($results['function_parameters'][$parameters]) ? true : false;
                $docblockParameterExists = (bool) isset($results['docblock_parameters'][$parameters]) ? true : false;

                // Validating whether the parameter in both the docblock as the function exists.
                if ($functionParameterExists && $docblockParameterExists) {
                    if ($results['function_parameters'][$parameters] !== $results['docblock_parameters'][$parameters]) {
                        $this->report->add(null, /* (MistypedParameter) */);
                    }
                } elseif ($functionParameterExists && !$docblockParameterExists) {
                    $this->report->add(null, /* (UntypedDocblockParameter) */);
                } elseif (!$functionParameterExists && $docblockParameterExists) {
                    $this->report->add(null, /* (UntypedFunctionParameter) */);
                }
            }
        }

        // Analysing the function docblock for parameters.
        if (!$analyseFunction && $analyseDocblock) {
            foreach ($results as $parameter) {
                $docblockParameterType = $this->getParameterTypeFromDocblock($docblock, $parameter);

                if (!isset($docblockParameterType)) {
                    $this->report->add(null, /* (UntypedDocblockParameter) */);
                }
            }
        }

        // Analysing the function for parameters.
        if ($analyseFunction && !$analyseDocblock) {
            foreach ($functionParameters as $parameter) {
                $parameterType = $this->getParameterType($parameter);

                if (!isset($parameterType)) {
                    $this->report->add(null, /* (UntypedParameter) */);
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

        // Analysing the function and the docblock for the return.
        if ($analyseFunction && $analyseDocblock) {
            if (isset($functionReturnType) && isset($docblockReturnType)) {
                if ($functionReturnType !== $docblockReturnType) {
                    $this->report->add(null, /* (MistypedReturn) */);
                }
            } elseif (!isset($functionReturnType) && isset($docblockReturnType)) {
                $this->report->add(null, /* (UntypedReturn) */);
            } elseif (isset($functionReturnType) && isset($docblockReturnType)) {
                $this->report->add(null, /* (UntypedDocblockReturn) */);
            } else {
                $this->report->add(null, /* (UntypedReturn && UntypedDocblockReturn) */);
            }
        }

        // Analysing the function docblock for the return.
        if (!$analyseFunction && $analyseDocblock) {
            if (isset($docblockReturnType)) {
                $this->report->add(null, /* (UntypedDocblockReturn) */);
            }
        }

        // Analysing the function for the return.
        if ($analyseFunction && !$analyseDocblock) {
            if (isset($returnType)) {
                $this->report->add(null, /* (UntypedReturn) */);
            }
        }
    }
}
