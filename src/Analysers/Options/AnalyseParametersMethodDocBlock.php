<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseParametersMethodDocBlock.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseParametersMethodDocBlock extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the arguments in the docblock from the current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
