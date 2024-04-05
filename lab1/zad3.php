<?php
zad3(15); //przykład próbny
function fib($n)
{
    $fibon = array();
    $i = 1;
    $a = 1;
    $b = 0;
    array_push($fibon, $b);
    while ($i <= $n) {
        array_push($fibon, $a);
        $a = $a + $b;
        $b = $a - $b;
        $i++;
    }
    return $fibon;
}

function zad3($n)
{
    $fib_arr = fib($n);
    $lineCount = 1;
    for ($i = 0; $i <= count($fib_arr); $i++) 
    {
        if ($i % 2 != 0) {
            echo $lineCount . '. ' . $fib_arr[$i] . "\n";
            $lineCount++;
        }
    }
}
?>