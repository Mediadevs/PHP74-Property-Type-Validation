<?php

namespace Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy;

/**
 * The strategy for analysing the class properties.
 * It will analyse whether the Properties directly match the given value if a value is set.
 * It will also analyse whether the logic which it interacts with has the correct value type.
 * And it will analyse whether the DocBlock to determine whether the hinted property type is valid.
 *
 * Class AnalysePropertiesStrategy
 *
 * @package Mediadevs\StrictlyPHP\Strategy\AnalysisStrategy
 */
class AnalysePropertiesStrategy
{
    /**
     * This method will analyse all the DocBlocks which interact with the properties.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseDocBlock(string $code): void
    {

    }

    /**
     * This method will analyse the property to validate whether the type is set.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseProperty(string $code): void
    {

    }

    /**
     * This method will analyse the whole class to check where the property is used and whether the usage is correct.
     *
     * @param string $code
     *
     * @return void;
     */
    private function analyseUsage(string $code): void
    {

    }
}