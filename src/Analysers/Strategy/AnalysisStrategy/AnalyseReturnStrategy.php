<?php

namespace Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy;

/**
 * The strategy for analysing return types.
 * It will analyse all the methods and the typed return type.
 * It will also validate what value actually will be returned.
 * And it will analyse whether the DocBlock to determine whether the hinted return type is valid.
 *
 * Class AnalyseReturnStrategy
 *
 * @package Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy
 */
class AnalyseReturnStrategy
{
    /**
     * This method will analyse all the DocBlocks which interact with the return.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseDocBlock(string $code): void
    {

    }

    /**
     * This method will analyse the return to validate whether the type is set.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseReturn(string $code): void
    {

    }

    /**
     * This method will analyse the whole class to check where the method is used and whether the usage is correct.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseUsage(string $code): void
    {

    }
}