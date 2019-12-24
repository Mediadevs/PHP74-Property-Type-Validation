<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseProperties;

/**
 * Class AnalysePropertyDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalysePropertyDocblock extends AbstractAnalyser
{
    use AnalyseDocblock;
    use AnalyseProperties;

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param string $code
     * @param array  $filters
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    public function analyse(string $code, array $filters): ?Report
    {
        return $this->report;
    }
}