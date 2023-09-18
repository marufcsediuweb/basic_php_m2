<?php
//Task 2: Skip Multiples of 5

// PHP script that prints number
function printNumbers() // Function defination
{
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 5 == 0) { // loop encounters a multiple of 5
            continue;
        }
        echo "{$i} \n";
    }
}

printNumbers(); // Function calling

?>