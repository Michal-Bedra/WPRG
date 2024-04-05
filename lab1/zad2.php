<?php
zad2(1,37); //przykład próbny

function isPrime($x)
{
    if ($x === 1) return false;
    for ($i = 2; $i < $x/2; $i++) {
        if ($x % $i === 0) return false;
    }
    return true;
}

function zad2($x, $y)
{
    for ($i = $x; $i <= $y; $i++) {
        if (isPrime($i)) {
            echo $i . "\n";
        }
    }
}
?>