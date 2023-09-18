<?php

// Task 01: Looping with Increment using a Function

// Even Number using Function and For Loop
function isEvenForLoop($start, $end)
{
    for ($f = $start; $f <= $end; $f++) {
        if ($f % 2 == 0) {
            echo $f . ", ";
        }
    }
}
isEvenForLoop(2, 12);
echo "\n";

// Even Number using Function and While Loop
function isEvenWhileLoop($start, $end)
{
    $w = $start;
    while ($w <= $end) {
        if ($w % 2 == 0) {
            echo $w . ", ";
        }
        $w++;
    }
}
isEvenWhileLoop(3, 20);
echo "\n";

// Even Number using Function and Do While Loop
function isEvenDoWhileLoop($start, $end)
{
    $d = $start;
    do {
        if ($d % 2 == 0) {
            echo $d . ", ";
        }
        $d++;
    } while ($d <= $end);
}
isEvenDoWhileLoop(5, 17);



?>