<?php
/**
 * Definition of the most basic kind of value objects.
 *
 * @package WPZAPP\SimpleValues
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\SimpleValues;

/**
 * Base class for the most basic kind of value objects.
 *
 * @since 1.0.0
 */
abstract class AbstractSimpleValue implements SimpleValue
{
    use SimpleValueTrait;

    /**
     * Constructor.
     *
     * Set the raw value.
     *
     * @since 1.0.0
     *
     * @param mixed $value Raw value.
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Set the raw value.
     *
     * @since 1.0.0
     *
     * @param mixed $value Raw value.
     */
    abstract protected function setValue($value);
}
