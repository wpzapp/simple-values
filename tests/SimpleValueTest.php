<?php
/**
 * Tests for the simple value base class.
 *
 * @package WPZAPP\SimpleValues
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\SimpleValues\Tests;

use PHPUnit\Framework\TestCase;

class SimpleValueTest extends TestCase
{
    public function testGetValue()
    {
        $rawValue = 23;

        $value = new SimpleIntValue($rawValue);
        $this->assertSame($rawValue, $value->getValue());
    }

    /**
     * @dataProvider dataIsEmpty
     */
    public function testIsEmpty($rawValue, $expected)
    {
        $value = new SimpleIntValue($rawValue);
        if ($expected) {
            $this->assertTrue($value->isEmpty());
        } else {
            $this->assertFalse($value->isEmpty());
        }
    }

    public function dataIsEmpty()
    {
        return array(
            array(23, false),
            array(0, true),
            array(-23, false),
        );
    }

    /**
     * @dataProvider dataEquals
     */
    public function testEquals($instanceToCompare, $expected)
    {
        $value = new SimpleIntValue(23);
        if ($expected) {
            $this->assertTrue($value->equals($instanceToCompare));
        } else {
            $this->assertFalse($value->equals($instanceToCompare));
        }
    }

    public function dataEquals()
    {
        return array(
            array(new SimpleIntValue(23), true),
            array(new SimpleIntValue(24), false),
            array(new SimpleStringValue(23), false),
        );
    }

    public function testFromValue()
    {
        $newRawValue = 42;

        $value = new SimpleIntValue(23);
        $result = $value->fromValue($newRawValue);
        $this->assertInstanceOf(SimpleIntValue::class, $result);
        $this->assertSame($newRawValue, $result->getValue());
    }

    public function testToString()
    {
        $value = new SimpleIntValue(23);
        $this->assertSame('23', $value->__toString());
    }
}
