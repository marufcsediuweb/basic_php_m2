<?php

//Task 3: Break on Condition
function fibonacci($number = 10)
{
    $numOne = 0;
    $numTwo = 1;
    $counter = 1;

    for ($i = 0; $i < $number; $i++) {
        if ($numOne > 100) {
            break;
        }
        echo $numOne . ", ";
        $numTwo = $counter;
        $counter = $numOne + $numTwo;
        $numOne = $numTwo;
    }
}

fibonacci();








?>