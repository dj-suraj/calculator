<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:44
 */

require 'vendor\autoload.php';
use src\Calculator;

$calculator = new Calculator();

if (!isset($argv[3])) {
    echo 'Operation missing ' . PHP_EOL;
    exit(0);
}

$number1 = $argv[1];
$number2 = $argv[2];
$operation = $argv[3];

try {

    if(is_int($number1) && is_int($number2)) {
        echo $calculator->calculate($number1, $number2, $operation);
    } else {
        echo 'Inputs must be integers';
    }
}
catch (\DivisionByZeroError $e) {
    echo $e->getMessage();
}
