<?php

//學生成績資料

$score=[
    "01" => [
        "國文" => 22,
        "英文" => 33 ,
        "數學" => 44
    ],
    "12" => [
        "國文" => 100,
        "英文" => 100,
        "數學" => 100
    ],
    "33" => [
        "國文" => 60,
        "英文" => 60,
        "數學" => 60
    ],
    "41" => [
        "國文" => 70,
        "英文" => 70,
        "數學" => 70
    ],
    "07" => [
        "國文" => 80,
        "英文" => 80,
        "數學" => 80
    ]
    ];

// $student = $score["07"];
//     echo "國文" . $score["24"]["國文"]."<br>";
//     echo "英文" . $score["24"]["英文"]."<br>";
//     echo "數學" . $score["24"]["數學"]."<br>";

if (isset($_GET["number"])){
    $number = $_GET["number"];
    echo "座號：".$number."的成績";
    echo "<hr>";
    echo "國文成績".$score[$number]["國文"]."分"."<br>";
    echo "英文成績".$score[$number]["英文"]."分"."<br>";
    echo "數學成績".$score[$number]["數學"]."分"."<br>";
}else{
    echo "<span style = 'font-waight:bold;color:red'>!!請提供學生座號!!";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="student2.html">回學生列表</a>
</body>
</html>