<?php

namespace Mediadevs\PHPStrictlyTyped;

use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseReturn;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseMethods;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseArguments;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseDocBlocks;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseProperties;
use Mediadevs\PHPStrictlyTyped\Analysers\Options\AnalyseMagicMethods;

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
        $this->analysers[] = new AnalyseArguments($code);
        $this->analysers[] = new AnalyseDocBlocks($code);
        $this->analysers[] = new AnalyseMagicMethods($code);
        $this->analysers[] = new AnalyseMethods($code);
        $this->analysers[] = new AnalyseProperties($code);
        $this->analysers[] = new AnalyseReturn($code);
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
