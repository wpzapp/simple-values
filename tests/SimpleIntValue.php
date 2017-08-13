<?php
/**
 * Tests for the simple value base class.
 *
 * @package WPZAPP\SimpleValues
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\SimpleValues\Tests;

use WPZAPP\SimpleValues\AbstractSimpleValue;

class SimpleIntValue extends AbstractSimpleValue
{

    /**
     * @inheritDoc
     */
    protected function setValue($value)
    {
        $this->value = (int) $value;
    }
}
