<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options\Parameter;

use Mediadevs\StrictlyPHP\Reporter\AbstractReport;

/**
 * Class MistypedParameterDocblock.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options\Parameter
 */
class MistypedParameterDocblock extends AbstractReport
{
    /**
     * Creating a report based upon the issue, each report has a can import a specific set of traits
     * to match it's own properties.
     *
     * @return AbstractReport
     */
    public function getMessage(): parent
    {
        // TODO: Implement getMessage() method.

        return $this;
    }
}
