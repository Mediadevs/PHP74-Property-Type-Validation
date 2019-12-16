<?php

namespace Mediadevs\StrictlyPHP;

use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseMagicMethods;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseProperty;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseParametersMethod;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseReturnMethod;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalysePropertyDocBlock;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseParametersMethodDocBlock;
use Mediadevs\StrictlyPHP\Analysers\Options\AnalyseReturnMethodDocBlock;

/**
 * Class Analyser.
 *
 * @package Mediadevs\StrictlyPHP
 */
class Analyser
{
    /**
     * All the analysers will be stored in here.
     *
     * @var array
     */
    private array $analysers = array();

    /**
     * Analyser constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        // Todo: work on this.
    }

    /**
     * Applying all the analysers to the subject.
     *
     *
     * @return array
     */
    public function analyse(): array
    {
        $collection = array();

        foreach ($this->analysers as $analyser) {
            $collection[] = $analyser->analyse();
        }

        return $collection;
    }
}
