<?php

namespace Mediadevs\StrictlyPHP\Analysers\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analysers\AbstractAnalyser;
use Mediadevs\StrictlyPHP\Analysers\AnalyserInterface;

/**
 * Class AnalyseProperty.
 *
 * @package Mediadevs\StrictlyPHP\Analysers\Options
 */
class AnalyseProperty extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the property type and determines whether the return type is valid.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // Todo: Write logic.

        return $this->report;
    }
}
