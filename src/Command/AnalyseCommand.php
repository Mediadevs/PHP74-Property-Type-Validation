<?php

namespace Mediadevs\PHPStrictlyTyped\Command;


use PhpParser\Error;

use Mediadevs\PHPStrictlyTyped\Analyser;
use Mediadevs\PHPStrictlyTyped\Configuration;
use Mediadevs\PHPStrictlyTyped\Issues\IssueInterface;

use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AnalyseCommand.
 * @package Mediadevs\PHPStrictlyTyped\Command
 */
class AnalyseCommand extends Command
{
    // Exit codes which can occur when parsing the project
    private const EXIT_CODE_INVALID_CONFIGURATION = 1;
    private const EXIT_CODE_DIRECTORY_NOT_FOUND = 2;
    private const EXIT_CODE_EMPTY_DIRECTORY = 3;
    private const EXIT_CODE_SYNTAX_ISSUE = 4;

    /**
     * The aliases which the parser can be called / executed by.
     *
     * @var array
     */
    private array $aliases = array(
        'analyze',
    );

    /**
     * Configuring the setup for this command.
     *
     * @return void
     */
    protected function configure(): void
    {
       $this->setAliases($this->aliases);
       $this->addOption(
           'format',
           null,
           InputOption::VALUE_REQUIRED,
           'Choose your format, options; "table", "compact"',
           'table'
       );
    }

    /**
     * Executing the command and applying the analysers.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int (Returns the exit code)
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Starting a stopwatch to monitor the execution time.
        $stopwatch = new Stopwatch();
        $stopwatch->start($this->getName());

        // The exit code this command will return based on the events which occurred.
        $exitCode = '';


        // Stopping the stopwatch and storing the results in $duration.
        $stopwatchEvent = $stopwatch->stop($this->getName());

        // Stopwatch data
        $usage = $stopwatchEvent->getMemory() / 1024000;
        $duration = $stopwatchEvent->getDuration();

        // Printing the results to the end user
        $output->writeln(sprintf('Memory: %.2F MB, Time: %d ms', $usage, $duration));

        return $exitCode;
    }
}
