<?php

// >變數
//  > $
//  >在程式執行過程中有可能被改變
//  >在函示中宣告則為區域變數;

// >常數
//  >define("PI","3.14") / count
//  >在程式執行中不會被改變
//  >為全域變數

/*宣告一個常數，常數不可被變更 */
$a=1;
echo($a);
echo"<br>";
$a=2.1;
echo $a;
echo"<br>";
print($a);
echo"<br>";
define("PI",3.1415926);
echo PI;
echo PI*2.10;

$studentInSchool="yes";

//字串運算子. vs 算數運算子+
$a=1;
$b="B";
echo $a;
echo "<br>";
echo $b;
$c = $a . $b;
$d = $a + $b;
echo "<hr>";
echo "$c";
echo "<br>";
echo "$d";
  
//Warning: A non-numeric value encountered in D:\web21\test.php on line 34
//出現此警告表示說，line34有一個非數字的數值，但還是會繼續執行下面的程式。

if ()

?>
