<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\libraries;

class Calculator {

    function __construct() {
        
    }

    public function add($x, $y) {
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new \InvalidArgumentException;
        }
        return $x + $y;
    }
    

}
