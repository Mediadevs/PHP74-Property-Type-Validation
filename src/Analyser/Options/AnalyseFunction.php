<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseReturn;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseParameters;

/**
 * Class AnalyseFunction.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseFunction extends AbstractAnalyser
{
    use AnalyseReturn;
    use AnalyseDocblock;
    use AnalyseParameters;

    /**
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