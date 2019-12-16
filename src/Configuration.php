<?php

namespace Mediadevs\StrictlyPHP;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Finder\Finder;

class Configuration
{
    // All the filters which can be applied for project validation.
    private const STRICTLY_FILTERS = array(
        'analyse-property-types',
        'analyse-parameters-types',
        'analyse-return-types',
    );

    // The analysis configuration file.
    private const STRICTLY_CONFIGURATION_FILE = '.strictly.yml';

    /**
     * The path of the current working directory.
     *
     * @var string|null
     */
    private ?string $currentWorkingDirectory;

    /**
     * The finder which will be used to locate and parse the file.
     *
     * @var \Symfony\Component\Finder\Finder
     */
    private Finder $finder;

    /**
     * Collecting all the files which should be subject of analysis.
     *
     * @return \Iterator|\Symfony\Component\Finder\SplFileInfo[]
     */
    public function getFiles(): \Traversable
    {
        // Collecting the configuration.
        $configuration = $this->getConfiguration();

        // Configured directories.
        $includedDirectories = $this->getIncludedDirectories($configuration);
        $excludedDirectories = $this->getExcludedDirectories($configuration);

        // Whether the directories are configured.
        if (!isset($includedDirectories) && !isset($excludedDirectories)) {
            // Including all the configuration files.
            $this->finder->in($this->currentWorkingDirectory);
        } else {
            // Collecting the files which should be parsed from the configuration.
            if (isset($includedDirectories)) {
                $this->finder->in($includedDirectories);
            }

            // Collecting the files which shouldn't be parsed from the configuration.
            if (isset($excludedDirectories)) {
                $this->finder->exclude($excludedDirectories);
            }
        }

        // Including all the files which end on ".php".
        $this->finder->files()->name('*.php');

        return $this->finder->files()->getIterator();
    }

    /**
     * Collecting the contents of the configuration file.
     *
     * @return array
     */
    private function getConfiguration(): array
    {
        return Yaml::parseFile(self::STRICTLY_CONFIGURATION_FILE);
    }

    /**
     * Collecting all analysers which have been enabled in the configuration.
     *
     * @param array $configuration
     *
     * @return array
     */
    private function getEnabledAnalysers(array $configuration): array
    {
        return $configuration['project']['analysers']['enabled'];
    }

    /**
     * Collecting all analysers which have been disabled in the configuration.
     *
     * @param array $configuration
     *
     * @return array
     */
    private function getDisabledAnalysers(array $configuration): array
    {
        return $configuration['project']['analysers']['disabled'];
    }

    /**
     * Collecting all the names of the directories which should be analysed.
     *
     * @param array $configuration
     *
     * @return array
     */
    private function getIncludedDirectories(array $configuration): array
    {
        return $configuration['project']['directories']['included'];
    }

    /**
     * Collecting all the names of the directories which shouldn't be analysed.
     *
     * @param array $configuration
     *
     * @return array
     */
    private function getExcludedDirectories(array $configuration): array
    {
        return $configuration['project']['directories']['excluded'];
    }
}
