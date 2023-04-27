<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require './src/Calculator.php';
final class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5,2);
        $this->assertEquals(3,$result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(5,2);
        $this->assertEquals(10,$result);
    }
}