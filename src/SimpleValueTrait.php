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
 * Trait for the most basic kind of value objects.
 *
 * @since 1.0.0
 */
trait SimpleValueTrait
{

    /** @var mixed Raw value. */
    protected $value;

    /**
     * @inheritDoc
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
        return empty($this->value);
    }

    /**
     * @inheritDoc
     */
    public function equals(SimpleValue $value): bool
    {
        if (!is_a($value, get_class($this))) {
            return false;
        }

        return $this->value === $value->getValue();
    }

    /**
     * @inheritDoc
     */
    public function fromValue($rawValue): SimpleValue
    {
        $className = get_class($this);

        return new $className($rawValue);
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }
}
