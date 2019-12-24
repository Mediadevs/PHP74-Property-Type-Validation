<?php

namespace Mediadevs\StrictlyPHP\Analyser\Factory;

use Mediadevs\StrictlyPHP\Configuration;

/**
 * Class AnalyserFactory.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Factory
 */
class AnalyserFactory
{
    /**
     * Creating the analysis based upon the configuration.
     *
     * @param string $code
     *
     * @return void
     */
    public function create(string $code): void
    {
        $config = new Configuration();

        $config->getAnalysers();
    }
}
