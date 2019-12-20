<?php

namespace Mediadevs\StrictlyPHP\Strategy\CodeAnalysisStrategy;

/**
 * Class NodeStrategy.
 *
 * @package Mediadevs\StrictlyPHP\Strategy\CodeAnalysisStrategy
 */
class NodeStrategy
{
    /** @var array All the possible magic methods */
    private const MAGIC_METHODS = array(
        '__construct',
        '__destruct',
        '__call',
        '__callStatic',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__sleep',
        '__wakeup',
        '__toString',
        '__invoke',
        '__set_state',
        '__clone',
        '__debugInfo',
    );

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
     * Determines whether the node is a method or a function.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isFunctionLike(Node $node): bool
    {
        return (bool) ($node instanceof Node\FunctionLike) ? true : false;
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
     * Determines whether the node is a method call.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isMethodCall(Node $node): bool
    {
        return (bool) ($node instanceof Node\Expr\MethodCall) ? true : false;
    }

    /**
     * Determines whether the node is a function.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isFunction(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\Function_) ? true : false;
    }

    /**
     * Determines whether the node is a function call.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isFunctionCall(Node $node): bool
    {
        return (bool) ($node instanceof Node\Expr\FuncCall) ? true : false;
    }

    /**
     * Determines whether the node is a magic method.
     *
     * If the node is a method the strategy will be adjusted and analysis will be applied.
     * The results of the validation will be casted into the scalar type of (bool) to force the return type.
     *
     * @param \PhpParser\Node $node
     *
     * @return bool
     */
    public function isMagicMethod(Node $node): bool
    {
        // Whether the node is an instance of ClassMethod
        $isMethod = (bool) ($node instanceof Node\Stmt\ClassMethod) ? true : false;

        // Whether the method name matches any of the self::MAGIC_METHODS items.
        $isMagicMethod = (bool) in_array($node->name->name, self::MAGIC_METHODS) ? true : false;

        return (bool) ($isMethod && $isMagicMethod) ? true : false;
    }

    /**
     * TODO: Describe strategy
     *
     * @param Node $node
     *
     * @return bool
     */
    public function isExpression(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\ClassMethod) ? true : false;
    }

    /**
     * TODO: Describe strategy
     *
     * @param Node $node
     *
     * @return bool
     */
    public function isParameter(Node $node): bool
    {
        return (bool) ($node instanceof Node\Stmt\ClassMethod) ? true : false;
    }
}
