<?php

use StringCalculator\StringCalculator;

class StringCalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var StringCalculator
     */
    protected $stringCalculator;

    public function setUp()
    {
        $this->stringCalculator = new StringCalculator();
    }

    public function testAddWithEmptyString()
    {
        $result = $this->stringCalculator->add("");

        $this->assertEquals(0, $result);
    }

    public function testAddWithSingleNumberString()
    {
        $result = $this->stringCalculator->add("1");

        $this->assertEquals(1, $result);
    }

    public function testAddWithTwoNumberString()
    {
        $result = $this->stringCalculator->add("//;\n1;2");

        $this->assertEquals(3, $result);
    }

    public function testAddWithThreeNumberString()
    {
        $result = $this->stringCalculator->add("19,2,57");

        $this->assertEquals(78, $result);
    }

    public function testAddWithNewLineDelimitedFourNumberString()
    {
        $result = $this->stringCalculator->add("1\n2,3\n4");

        $this->assertEquals(10, $result);
    }

    public function testAddWithSemiColonTwoNumberString()
    {
        $result = $this->stringCalculator->add("//;\n1;2");

        $this->assertEquals(3, $result);
    }
}