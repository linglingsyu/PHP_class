<?php

// 倒直角三角形
$x = 6;
for ($i = 0; $i < $x; $i++) {
    for ($j = $x; $j > $i; $j--) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

// 正直角三角形 
$x = 6;
for ($i = $x; $i > 0; $i--) {
    for ($j = $x; $j > $i - 1; $j--) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
// 正三角形

// for ($i = 1; $i > 5; $i++){

// }

$x = 5;
$f = floor($x / 2); //2-floor
$c = ceil($x / 2);  //3-ceil
$m = floor($x / 2); //2-middle
for ($i = 0; $i < $f; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j == $m - $i || $j == $m + $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
for ($i = 0; $i < $c; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j == $i || $j == $x - 1 - $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
