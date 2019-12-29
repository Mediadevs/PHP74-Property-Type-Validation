<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use PhpParser\Node\FunctionLike;
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
     * @param string $code
     * @param array  $filters
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    public function analyse(string $code, array $filters): ?Report
    {
        $analyseFunction                    = (bool) isset($filters['analyse-function']);
        $analyseFunctionParameters          = (bool) isset($filters['analyse-function-parameters']);
        $analyseFunctionReturn              = (bool) isset($filters['analyse-function-return']);
        $analyseFunctionDocblock            = (bool) isset($filters['analyse-function-docblock']);
        $analyseFunctionParametersDocblock  = (bool) isset($filters['analyse-function-parameters-docblock']);
        $analyseFunctionReturnDocblock      = (bool) isset($filters['analyse-function-return-docblock']);
        $analyseFunctionCallable            = (bool) isset($filters['analyse-function-callable']);

        // Analyse both the function and the docblock.
        if ($analyseFunction && $analyseFunctionDocblock) {
            // Both global configuration scopes are enabled, the analysis configuration now depends on the
            // specific parameter / return analysis.
            $this->parameterAnalysis($code, $analyseFunctionParameters, $analyseFunctionParametersDocblock);
            $this->returnAnalysis($code, $analyseFunctionReturn, $analyseFunctionReturnDocblock);
        }

        // Analyse only the function and not the docblock.
        if ($analyseFunction && !$analyseFunctionDocblock) {
            // Only the function analysis is enabled, the analysis configuration now depends on the
            // specific parameter / return analysis and the docblock analysis is disabled on default.
            $this->parameterAnalysis($code, $analyseFunctionParameters, false);
            $this->returnAnalysis($code, $analyseFunctionReturn, false);
        }

        // Analyse only the docblock and not the function.
        if ($analyseFunction && !$analyseFunctionDocblock) {
            // Only the docblock analysis is enabled, the analysis configuration now depends on the
            // specific parameter / return analysis and the function analysis is disabled on default.
            $this->parameterAnalysis($code, false, $analyseFunctionParametersDocblock);
            $this->returnAnalysis($code, false, $analyseFunctionReturnDocblock);
        }

        return $this->report;
    }

    /**
     * Validating which analysis can be done for the parameters.
     *
     * @param string $code
     * @param bool   $analyseFunction
     * @param bool   $analyseDocblock
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function parameterAnalysis(string $code, bool $analyseFunction, bool $analyseDocblock): ?Report
    {
        // Analysing the function and the docblock for parameters.
        if ($analyseFunction && $analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // Analysing the function docblock for parameters.
        if (!$analyseFunction && $analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // Analysing the function for parameters.
        if ($analyseFunction && !$analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // All filters have been disabled or analysis have passed and null will be returned.
        return null;
    }

    /**
     * Validating which analysis can be done for the parameters.
     *
     * @param string $code
     * @param bool   $analyseFunction
     * @param bool   $analyseDocblock
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function returnAnalysis(string $code, bool $analyseFunction, bool $analyseDocblock): ?Report
    {
        // Analysing the function and the docblock for parameters.
        if ($analyseFunction && $analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // Analysing the function docblock for parameters.
        if (!$analyseFunction && $analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // Analysing the function for parameters.
        if ($analyseFunction && !$analyseDocblock) {
            // TODO: WRITE LOGIC.
        }

        // All filters have been disabled or analysis have passed and null will be returned.
        return null;
    }

    /**
     * Analysing the parameters of the "function like" node.
     *
     * @param \PhpParser\Node\FunctionLike $node
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function analyseParameters(FunctionLike $node): ?Report
    {
        return null;
    }

    /**
     * Analysing the parameters of the "function like" docblock.
     *
     * @param \PhpParser\Node\FunctionLike $node
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function analyseParameterDocblock(FunctionLike $node): ?Report
    {
        return null;
    }


    /**
     * Analysing the return of the "function like" node.
     *
     * @param \PhpParser\Node\FunctionLike $node
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function analyseReturn(FunctionLike $node): ?Report
    {
        return null;
    }

    /**
     * Analysing the return of the "function like" docblock.
     *
     * @param \PhpParser\Node\FunctionLike $node
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    private function analyseReturnDocblock(FunctionLike $node): ?Report
    {
        return null;
    }
}