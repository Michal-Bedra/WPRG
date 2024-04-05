<?php
$fruit = array("jablko", "banan", "pomarancza");
foreach ($fruit as $value) {
    echo reverse($value);
    if ($value[0] == "p") {
        echo " -starts with 'p'\n";
    } else {
        echo "\n";
    }
}
function reverse($string) {
    $result = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $result .= $string[$i];
    }
    return $result;
}
?>