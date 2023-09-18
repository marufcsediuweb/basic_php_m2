<?php

//Task 4: Fibonacci Series printing using a Function
function fibonacci($number = 15)
{
    $numOne = 0;
    $numTwo = 1;
    $counter = 1;

    for ($i = 0; $i < $number; $i++) {
        echo $numOne . ", ";
        $numTwo = $counter;
        $counter = $numOne + $numTwo;
        $numOne = $numTwo;
    }
}

fibonacci();








?>