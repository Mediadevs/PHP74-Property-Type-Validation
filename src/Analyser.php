<?php

namespace Mediadevs\PropertyAnalyser;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlockFactory;

class Analyser
{
    /**
     * The subject which will be used for parsing.
     *
     * @var string
     */
    private string $code;

    /**
     * The IssueCollection instance for handling the detected issues.
     *
     * @var IssueCollection
     */
    private IssueCollection $issueCollection;

    /**
     * The DocBlockFactory instance for parsing the subjects DocBlocks.
     *
     * @var DocBlockFactory
     */
    private DocBlockFactory $docBlockFactory;

    /**
     * The DocBlockAnalyser instance for parsing the subjects DocBlocks.
     *
     * @var DocBlockAnalyser
     */
    private DocBlockAnalyser $docBlockAnalyser;

    /**
     * Analyser constructor.
     *
     * Type hinting properties for the analyser class.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
        $this->issueCollection = new IssueCollection();
        $this->docBlockFactory = DocBlockFactory::createInstance();
        $this->docBlockAnalyser = new DocBlockAnalyser();
    }

    /**
     * Applying all the analyse methods.
     *
     * @return IssueCollection
     */
    public function analyse(): IssueCollection
    {

    }

    /**
     * Analysing the properties from the current instance.
     */
    private function analyseProperties(): void
    {

    }

    /**
     * Analysing the DocBlocks from the current instance.
     */
    private function analyseDocBlocks(): void
    {

    }

    /**
     * Analysing the method parameters from the current instance.
     */
    private function analyseParameters(): void
    {

    }

    /**
     * Analysing the methods from the current instance.
     */
    private function analyseMethods(): void
    {

    }

    /**
     * Analysing the magic methods from the current instance.
     */
    private function analyseMagicMethods(): void
    {

    }

    /**
     * Analysing the return statements from the current instance.
     */
    private function analyseReturn(): void
    {

    }
}