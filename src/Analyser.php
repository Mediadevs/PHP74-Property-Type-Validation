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
        // Registering all the analysers the the array.
        $this->analysers[] = new AnalyseMagicMethods($code);

        // Parameter type
        $this->analysers[] = new AnalyseParametersMethod($code);
        $this->analysers[] = new AnalyseParametersMethodDocBlock($code);
        // Property type

        $this->analysers[] = new AnalyseProperty($code);
        $this->analysers[] = new AnalysePropertyDocBlock($code);

        // Return type
        $this->analysers[] = new AnalyseReturnMethod($code);
        $this->analysers[] = new AnalyseReturnMethodDocBlock($code);
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
