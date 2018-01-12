<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:27
 */

use src\Calculator;
use src\CalculatorFactory;
use src\client\AdditionClient;
use src\client\DivisionClient;
use src\client\MultiplicationClient;
use src\client\SubtractionClient;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    private $calc;

    public function setUp()
    {
        $this->calc = new Calculator();
    }

    public function tearDown()
    {
        $this->calc = null;
    }

    public function testAddChecksOut()
    {
        $factory = $this->createFactory('add');
        if (!empty($factory)) {
            $res = $factory->calculate(1, 2);
        }
        $this->assertEquals(3, $res, 'Result of `add` checks out');
    }

    public function testSubtractionChecksOut()
    {
        $factory = $this->createFactory('subtract');
        if (!empty($factory)) {
            $res = $factory->calculate(1, 1);
        }
        $this->assertEquals(0, $res, 'Result of `subract` checks out');
    }

    public function testMultiplicationChecksOut()
    {
        $factory = $this->createFactory('multiply');
        if (!empty($factory)) {
            $res = $factory->calculate(1, 2);
        }
        $this->assertEquals(2, $res, 'Result of `multiply` checks out');
    }

    public function testDivideChecksOut()
    {
        $factory = $this->createFactory('divide');
        if (!empty($factory)) {
            $res = $factory->calculate(2, 2);
        }
        $this->assertEquals(1, $res, 'Result of `division` checks out');
    }

    public function createFactory($type)
    {
        return CalculatorFactory::build($type);
    }

}