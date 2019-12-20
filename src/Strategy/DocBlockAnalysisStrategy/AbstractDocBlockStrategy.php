<?php

namespace Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy;

use phpDocumentor\Reflection\DocBlock;

/**
 * Class AbstractDocBlockStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\DocblockStrategy
 */
abstract class AbstractDocBlockStrategy
{
    /**
     * The docblock which is target for this analysis.
     *
     * @var \phpDocumentor\Reflection\DocBlock
     */
    protected DocBlock $docBlock;

    /**
     * The class for parsing the docblock types.
     *
     * @var \Mediadevs\StrictlyPHP\Strategy\DocBlockAnalysisStrategy\DocBlockTypeStrategy
     */
    protected DocBlockTypeStrategy $typeStrategy;

    /**
     * ParameterStrategy constructor.
     *
     * @param \phpDocumentor\Reflection\DocBlock $docBlock
     */
    public function __construct(DocBlock $docBlock)
    {
        $this->docBlock = $docBlock;
        $this->typeStrategy = new DocBlockTypeStrategy();
    }
}
