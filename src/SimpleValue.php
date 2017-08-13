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
 * Interface for the most basic kind of value objects.
 *
 * @since 1.0.0
 */
interface SimpleValue
{

    /**
     * Get the current raw value.
     *
     * @since 1.0.0
     *
     * @return mixed Current raw value.
     */
    public function getValue();

    /**
     * Check whether the value is empty.
     *
     * @since 1.0.0
     *
     * @return bool True if the value is empty, false otherwise.
     */
    public function isEmpty(): bool;

    /**
     * Test whether another given value object matches this one.
     *
     * This method does perform an identity check, it only checks
     * whether the raw values for the compared objects equal.
     *
     * @since 1.0.0
     *
     * @param SimpleValue $value Value object to compare against.
     * @return bool True if the values are equal, false otherwise.
     */
    public function equals(SimpleValue $value): bool;

    /**
     * Create a new value object with similar behavior from a new raw value.
     *
     * @since 1.0.0
     *
     * @param mixed $rawValue New raw value.
     * @return SimpleValue New value object based on the current value object.
     */
    public function fromValue($rawValue): SimpleValue;

    /**
     * Get a string representation of the value.
     *
     * @since 1.0.0
     *
     * @return string String representation of the value.
     */
    public function __toString(): string;
}
