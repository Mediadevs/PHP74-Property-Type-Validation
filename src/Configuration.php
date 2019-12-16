<?php

namespace Mediadevs\StrictlyPHP;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Exception\ParseException;

class Configuration
{
    // All the filters which can be applied for project validation.
    private const STRICTLY_FILTERS = array(
        'analyse-property-types',
        'analyse-parameters-types',
        'analyse-return-types',
    );

    /**
     * The file which will contain the configuration.
     *
     * @var string|null
     */
    private ?string $configurationFile;

    /**
     * The path which points to the location of the configuration.
     *
     * @var string|null
     */
    private ?string $configurationPath;

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
     * Configuration constructor.
     *
     * @param string|null $configurationFile
     * @param string|null $configurationPath
     */
    public function __construct(?string $configurationFile, ?string $configurationPath)
    {
        $this->configurationFile = $configurationFile;
        $this->configurationPath = $configurationPath;
        $this->currentWorkingDirectory = getcwd();
        $this->finder = new Finder();
    }

    /**
     * Collecting all the files which should be subject of analysis.
     *
     * @return \Iterator|\Symfony\Component\Finder\SplFileInfo[]
     */
    public function getFiles(): \Traversable
    {
        // Determine whether the configuration file exists.
        if ($this->configurationPathExists()) {
            // Including all the configuration files.
            $this->finder->in($this->configurationPath);

        } elseif ($this->configurationFileExists()) {
            // Collecting the configuration.
            $configuration = $this->getConfiguration();

            // Collecting the files which should be parsed from the configuration.
            $includedDirectories = $this->getIncludedDirectories($configuration);
            if (isset($includedDirectories)) {
                $this->finder->in($includedDirectories);
            }

            // Collecting the files which shouldn't be parsed from the configuration.
            $excludedDirectories = $this->getExcludedDirectories($configuration);
            if (isset($excludedDirectories)) {
                $this->finder->exclude($excludedDirectories);
            }
        } else {
            // Including all the configuration files.
            $this->finder->in($this->currentWorkingDirectory);
        }

        // Including all the files which end on ".php".
        $this->finder->files()->name('*.php');

        return $this->finder->files()->getIterator();
    }

    /**
     * Whether the configuration file exists.
     *
     * @return bool
     */
    private function configurationFileExists(): bool
    {
        return (bool) ($this->configurationFile && file_exists($this->configurationFile)) ? true : false;
    }

    /**
     * Whether the configuration path exists.
     *
     * @return bool
     */
    private function configurationPathExists(): bool
    {
        return (bool) ($this->configurationPath && is_dir($this->configurationPath)) ? true : false;
    }

    /**
     * Collecting the contents of the configuration file.
     *
     * @return array
     */
    private function getConfiguration(): array
    {
        return Yaml::parseFile($this->configurationFile);
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
