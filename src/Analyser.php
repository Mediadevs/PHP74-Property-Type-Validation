<?php

namespace Mediadevs\PHPStrictlyTyped;

use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseMagicMethods;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalysePropertyType;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseArgumentsFromMethod;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseArgumentsFromDocBlock;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseReturnTypeFromDocBlock;

/**
 * Class Analyser.
 *
 * @package Mediadevs\PHPStrictlyTyped
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
        // Registering all the analysers the the array.
        $this->analysers[] = new AnalyseArgumentsFromDocBlock($code);
        $this->analysers[] = new AnalyseArgumentsFromMethod($code);
        $this->analysers[] = new AnalyseMagicMethods($code);
        $this->analysers[] = new AnalysePropertyType($code);
        $this->analysers[] = new AnalyseReturnTypeFromDocBlock($code);
        $this->analysers[] = new AnalyseArgumentsFromMethod($code);
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
