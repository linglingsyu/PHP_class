<?php


//if判斷式

$score=50;
if ($score>=60){
    echo "合格";
}else{
    echo "不合格";
}


echo "<hr>";


//判斷成績

$score=30;
echo "成績:".$score;
echo "<br>";
echo "等級:";

if ($score>=90) {
    echo "A";
} else if($score>=75) {
    echo "B";
} else if($score>=60) {
    echo "C";
} else {
    echo "D";
}
echo "<br>";
//巢狀判斷式(code結構複雜較難閱讀))
$score=30;
if ($score>=90) {
    echo "A";
} else {
    if ($score>=75) {
        echo "B";
    } else {
        if ($score>=60) {
            echo "C";
        } else {
            echo "D";
        }     
    }   
}
echo "<hr>";
// 基礎練習  閏年判斷
/*
1.公元年分非4的倍數，為平年。
2.公元年分為4的倍數但非100的倍數，為閏年。
3.公元年分為100的倍數但非400的倍數，為平年。
4.公元年分為400的倍數，為閏年。

真值表
true && true => true
true && false => false
false && true => false
false && false => false

*/ 

$year=2020;
echo "西元年：".$year;
echo "<br>";
// if($year%4 == 0 && $year%100 !=0){
//     echo "今年是閏年";
// } else {
//     if($year %400 ==0 ){
//         echo "今年是閏年";
//     } else {
//         echo "今年是平年";
//     } 
// }

if($year%4 == 0 && ($year%100 !=0 || $year %400 ==0 ) ){
    echo "今年是閏年";
} else {
        echo "今年是平年";
}

echo "<hr>";

//switch 迴圈
$score=88;
$level="";
if ($score>=90) {
    $level = "A";
} else if($score>=75) {
    $level = "B";
} else if($score>=60) {
    $level = "C";
} else {
    $level = "D";
}
echo "成績:".$score;
echo "<br>";
echo "等級:".$level;
echo "<br>";
switch($level){
    case "A":
        echo "非常好，請努力保持";
    break;
    case "B":
        echo "可圈可點，但還有進步的空間";
    break;
    case "C":
        echo "一般水平，需要更多的努力";
    break;
    case "D":
        echo "用心不足，請加強";
    break;
    default:

}
echo "<hr>";
//三元運算子
echo "三元運算子<br>";
$score=88;
echo ($score>=60)? "及格" : "不及格";
echo "<br>";
//也可以將其結果指定到變數內 
$result = ($score>=60)? "及格": "不及格" ;
echo $result;
echo "<hr>";





?>