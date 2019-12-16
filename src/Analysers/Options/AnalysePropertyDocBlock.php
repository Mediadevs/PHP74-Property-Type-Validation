<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalysePropertyDocBlock.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalysePropertyDocBlock extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the hinted type in the docblock from the property of current instance.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
