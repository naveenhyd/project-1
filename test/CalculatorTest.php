<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->calculator = new Calculator;
    }

    public function inputNumbers() {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2],
            [-9, -9, -18],
        ];
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($x, $y, $sum) {
        $this->assertEquals($sum, $this->calculator->add($x, $y));
    }

    /**
     * @expectedException InvalidArgumentException 
     */
    public function testAddNonNumbers() {
        $this->calculator->add('a', 'b');
    }

}
