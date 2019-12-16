<?php

namespace Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy;

/**
 * The strategy for analysing the parameter types.
 * It will analyse whether the parameters directly match the given value if a value is set.
 * It will also analyse whether the logic which it interacts with has the correct value type.
 * And it will analyse whether the DocBlock to determine whether the hinted parameters type is valid.
 *
 * Class AnalyseParameterStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy
 */
class AnalyseParameterStrategy
{
    /**
     * This method will analyse all the DocBlocks which interact with the parameters.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseDocBlock(string $code): void
    {

    }

    /**
     * This method will analyse the parameters to validate whether the type is set.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseParameter(string $code): void
    {

    }

    /**
     * This method will analyse the method to check where the parameters is used and whether the usage is correct.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseUsage(string $code): void
    {

    }
}