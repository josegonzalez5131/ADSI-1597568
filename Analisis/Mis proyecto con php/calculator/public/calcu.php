<?php

require '../src/calculatorclass.php';

use Calculator\calculatorclass;

try {
    /**
     * Get the number of number1
     */
    $number1 = (float) $_GET['number1'];
    /**
     * Get th number of number2
     */
    $number2 = (float) $_GET['number2'];
    /**
     * Get the number of the operation
     */
    $operation = (integer) $_GET['operation'];
    $calcu = new calculatorclass();
    $calcu->setNumber1($number1);
    $calcu->setNumber2($number2);
    $message = NULL;
    if ($operation === 1) {
        $message = 'The sum between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->Sum();
    } else if ($operation === 2) {
        $message = 'The subtraction between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->Rest();
    } else if ($operation === 3) {
        $message = 'The multiplication between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->Mult();
    } else if ($operation === 4) {
        $message = 'The splitting between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->Div();
    } else if ($operation === 5) {
        $message = 'The module between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->mod();
    } else if ($operation === 6) {
        $message = 'The logarithm between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->log();
    } else if ($operation === 7) {
        $message = 'The pow between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->pow();
    } else if ($operation === 8) {
        $message = 'The pow between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->pow();
    } else if ($operation === 9) {
        $message = 'Error: The division between zero is mathematically impossible ';
    } else if ($operation === 10) {
        $message = 'The square root of the ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->square();
    } else if ($operation === 11) {
        $message = 'The root between ' . $number1 . ' and ' . $number2 . ' is ' . $calcu->squarex();
    } else {
        $message = 'Error: No operation selectd';
    }
} catch (Exception $exc) {
    if ($exc->getCode() === 404) {
        $message = $exc->getMessage();
    } else {
        echo 'I\'m sorry, we have a problem<br>';
        echo $exc->getMessage();
        echo '<br>';
        echo $exc->getTraceAsString();
    }
} finally {
    if ($message !== NULL) {
        require 'resul.php';
    }
}    