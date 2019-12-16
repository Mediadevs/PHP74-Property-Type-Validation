<?php

namespace Mediadevs\StrictlyPHP\Analysers;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Report;

class AnalysisStrategy extends AbstractAnalyser implements AnalyserInterface
{
    /**
     * Analysing the target file and applying the filters for this job.
     *
     * @return Report
     */
    public function analyse(): Report
    {
        // TODO: Implement analyse() method.
    }

    /**
     * Determines whether the node is a class.
     *
     * If the node is a class it will parse the sub-nodes to find properties and methods.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isClass(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\Class_) ? true : false;
    }

    /**
     * Determines whether the node is a property.
     *
     * If the node is a property the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isProperty(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\Property) ? true : false;
    }

    /**
     * Determines whether the node is a method.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isMethod(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\ClassMethod) ? true : false;
    }

    /**
     * Determines whether the node is a parameter.
     *
     * If the node is a parameter the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isParameter(Node $node): bool
    {
        return (bool) ($node instanceof Node\Param) ? true : false;
    }

    /**
     * Determines whether the node is a return type.
     *
     * If the node is a return type the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isReturn(Node $node): bool
    {
        return (bool) ($node instanceof Node\Name) ? true : false;
    }
}