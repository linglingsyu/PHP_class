<style>
    * {
        font-family: "細明體";
    }
</style>

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

// 中空菱形

echo "<hr>";
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
echo "<hr>";

// 正三角形

$x = 5;
for ($i = 0; $i < $x; $i++) {
    for ($j = 0; $j < $x * 2 - 1; $j++) {
        //if ($j == $x+$i-1 || $j == $x-$i-1) {
        if ($j <= $x + $i - 1 && $j >= $x - $i - 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<hr>";
// 中空菱形
$x = 9;
$middle = floor($x / 2);  //j中間的位置&印下4行 $middle==4
$ceil = ceil($x / 2); //  印上5行 $ceil==5 
for ($i = 0; $i < $ceil; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j == $middle - $i || $j == $middle + $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
for ($i = 0; $i < $middle; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j == $i + 1 || $j == $x - $i - 2) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<hr>";
// 菱形
$x = 9;
$middle = floor($x / 2);  //j中間的位置&印下4行 $middle==4
$ceil = ceil($x / 2); //  印上5行 $ceil==5 
for ($i = 0; $i < $ceil; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j >= $middle - $i && $j <= $middle + $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
for ($i = 0; $i < $middle; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j >= $i + 1 && $j <= $x - $i - 2) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "<hr>CC<hr>";
// 菱形
$x = 9;
$middle = floor($x / 2);  //j中間的位置&印下4行 $middle==4
for ($i = -floor($x / 2); $i <= floor($x / 2); $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($j >= abs($i) && $j <= $x - abs($i) - 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "<hr>矩形<hr>";
//矩形
$x = 10; //直
$y = 11; //橫
for ($i = 0; $i < $y; $i++) {
    if ($i == 0 || $i == $y - 1) {
        for ($j = 0; $j < $x; $j++) {
            echo "*";
        }
    } else {
        for ($j = 0; $j < $x; $j++) {
            if ($j == 0 || $j == $x - 1)
                echo "*";
            else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}

echo "<hr>矩形<hr>";
//矩形
$x = 10; //直
$y = 11; //橫
for ($i = 0; $i < $y; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($i == 0 || $i == $y - 1 || $j == 0 || $j == $x - 1)
            echo "*";
        else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<hr>矩形對角線(一定是正方形才能畫一個x)<hr>";



$x = 11; // 直的J
$y = 11; // 橫的I
for ($i = 0; $i < $y; $i++) {
    for ($j = 0; $j < $x; $j++) {
        if ($i == 0 || $i == $y - 1 || $j == 0 || $j == $x - 1 || $j == $i || $j == $x - 1 - $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}



echo "<hr>九九乘法表<hr>";
echo "<table>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        if ($i ==0 && $j == 0) {
            echo "<td>" . "&nbsp;" . "</td>";
        } elseif ($j == 0) {
            echo "<td>" . $i . "</td>";
        } elseif ($i == 0) {
            echo "<td>" . $j . "</td>";
        } else {
            echo "<td>" . $i * $j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
