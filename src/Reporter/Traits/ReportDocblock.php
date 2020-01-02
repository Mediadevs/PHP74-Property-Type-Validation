<?php

namespace Mediadevs\StrictlyPHP\Reporter\Traits;

/**
 * Trait ReportDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Traits
 */
trait ReportDocblock
{
    /**
     * Generating a message when the docblock is missing.
     *
     * @param string $name
     *
     * @return string
     */
    protected function missingDocblock(string $name): string
    {
        $str = 'Missing docblock for "%s".';

        return (string) sprintf($str, [$name]);
    }

    /**
     * Generating a message when a property is untyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    protected function untypedProperty(string $name, string $type): string
    {
        $str = 'Missing property type in docblock of "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a property is mistyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    protected function mistypedProperty(string $name, string $type): string
    {
        $str = 'Invalid property type in docblock of "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a parameter is untyped in the docblock.
     *
     * @param string      $name
     * @param string      $type
     * @param string|null $parameter
     *
     * @return string
     */
    protected function untypedParameter(string $name, string $type, ?string $parameter): string
    {
        $str = 'Missing parameter type in docblock of "%s". "@param %s %s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type, $parameter]);
    }

    /**
     * Generating a message when a parameter is mistyped in the docblock.
     *
     * @param string      $name
     * @param string      $type
     * @param string|null $parameter
     *
     * @return string
     */
    protected function mistypedParameter(string $name, string $type, ?string $parameter): string
    {
        $str = 'Invalid parameter type in docblock of "%s". "@param %s" must be of type "%s"';

        return (string) sprintf($str, [$name, $parameter, $type]);
    }

    /**
     * Generating a message when a return is untyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    protected function untypedReturn(string $name, string $type): string
    {
        $str = 'Missing return type in docblock of "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }

    /**
     * Generating a message when a return is mistyped in the docblock.
     *
     * @param string $name
     * @param string $type
     *
     * @return string
     */
    protected function mistypedReturn(string $name, string $type): string
    {
        $str = 'Invalid return type in docblock of "%s" must be of type "%s"';

        return (string) sprintf($str, [$name, $type]);
    }
}
