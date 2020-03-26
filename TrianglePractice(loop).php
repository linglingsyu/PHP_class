<style>
    * {
        font-family: Consolas;
        /* 設定等寬字型才不會跑版 */
        line-height: 16px;
    }
</style>


<?php
// 練習  直角三角形
echo "直角三角形";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
// 練習 倒直角三角形  i控制行數,j控制星星數
echo "倒直角三角形";
echo "<br>";
for ($i = 5; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo "正三角形";
echo "<br>";
for ($i = 0; $i < 5; $i++) { //控制行數

    for ($k = 0; $k < 4 - $i; $k++) {  //控制空白
        echo "&nbsp;";
    }

    for ($j = 0; $j < ($i * 2 + 1); $j++) {  //控制星星數
        echo "*";
    }
    echo "<br>";
    /*
    i=0 j印1顆
    i=1 j印3顆
    i=2 j印5顆
    i=3 j印7顆
    i=4 j印9顆
    故i與j之間的關係為 i*2+1
*/
}

echo "<hr>";
echo "菱形=一個正三角形+一個倒三角形";
echo "<br>";

//一個正三角形 星星數1.3.5.7.9
for ($i = 0; $i < 5; $i++) { //控制行數

    for ($k = 0; $k < 4 - $i; $k++) {  //控制空白
        echo "&nbsp;";
    }

    for ($j = 0; $j < ($i * 2 + 1); $j++) {  //控制星星數
        echo "*";
    }
    echo "<br>";
} //一個倒三角形 星星數 7.5.3.1 
for ($i = 4; $i >= 0; $i--) { //控制行數 (只要印4行,i從4開始遞減)
    for ($k = 0; $k < 5 - $i; $k++) {  //控制空白 
        echo "&nbsp;";
    }
    for ($j = 0; $j < ($i * 2 - 1); $j++) {  //控制星星數
        echo "*";
    }
    echo "<br>";
}

//菱形解法二
echo "菱形解法二";
echo "<br>";
for ($i = 0; $i < 9; $i++) {
    //利用判斷式來決定t的值,再用t的值來決定空白及星星的數量
    if ($i <= 4) {
        $t = $i;
    } else {
        $t = 8 - $i;
    }

    for ($k = 0; $k < (4 - $t); $k++) { //印空白
        echo "&nbsp;";
    }

    for ($j = 0; $j < ($t * 2 + 1); $j++) { //印星星
        echo "*";
    }
    //斷行
    echo "<br>";
}
echo "<hr>";
echo "矩形1";
echo "<br>";
for ($i = 0; $i < 7; $i++) {

    if ($i == 0 || $i == 6) {
        for ($j = 0; $j < 7; $j++) {
            echo "*";
        }
    } else {
        for ($k = 0; $k < 7; $k++) {
            if ($k == 0 || $k == 6) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}
echo "<hr>";
echo "矩形2-其實就是上下左右交叉6條線";
echo "<br>";
$x = 7;
for ($i = 0; $i < $x; $i++) {
    // i=1~=5時，應該印＊的位置: 0,i,x-1-i,x-1
    for ($j = 0; $j < $x; $j++) {
        if ($i == 0 || $i == $x - 1 || $j == 0 || $j == $i || $j == $x - 1 - $i || $j == $x - 1) {
            echo "*";
        } else {
            echo "&nbsp;";
        } 
    }
    echo "<br>";
}
echo "<hr>";
echo "老師的矩形2";
echo "<br>";

$x = 7;
for ($i = 0; $i < $x; $i++) {
    if ($i == 0 || $i == ($x - 1)) {
        for ($j = 0; $j < $x; $j++) {
            echo "*";
        }
    } else {
        for ($k = 0; $k < $x; $k++) {
            if ($k == 0 || $k == ($x - 1) || $k == ($x - $i - 1) || $k == $i) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}


?>