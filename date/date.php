<h4>日期/時間函式</h4>
<div>strtotime() - 把文字日期轉成時間序</div>
<?php

$time = "2020-04-16 11:30:20";
$serialTime =  strtotime($time);

echo date("Y年m月d日 H:i:s", $serialTime)

// https://www.w3school.com.cn/php/php_ref_date.asp

?>

<h4>時間練習</h4>
<div>距離下一次的生日還有幾天</div>
<div>11/26</div>

<?php

$today = date("Y-m-d");
$birthday = "2020-11-26";
$between = strtotime($birthday) - strtotime($today);
$days = $between / 60 / 60 / 24;
echo "還有:" . $days . "天";

$days = date("z", strtotime($birthday) - date("z", strtotime($today)));
echo "還有:" . $days . "天";

?>

<h4>date()函式</h4>
<?php

date_default_timezone_set("Asia/Taipei");
//轉時區
echo date("Y-m-d H:i:s");


?>

<h4>strtotime()函式</h4>

<?php

$date = strtotime("+3 days");
// strtotime(+3 days 2020-04-16);
echo date("Y-m-d", $date);
echo "<hr>";
// echo date("Y-m-d",strtotime("-7days 2020-11-26"));
echo date("Y-m-d", strtotime("-2 month", strtotime(2020 - 11 - 26)));

?>

<h4>日期練習</h4>
<div>印出今日起30天的日期</div>
<?php
echo "我自己寫的：" . "<br>";
$date = date("Y-m-d");
$date2 = strtotime($date);
$str = "";
for ($i = 0; $i < 30; $i++) {
    $date3 = date("Y-m-d", $date2 + 86400 * $i);
    $str = $date3 . "<br>";
    echo $str;
}

echo "<hr>";

echo "老師寫的：" . "<br>";
$today = date("Y-m-d");
for ($i = 0; $i < 30; $i++) {
    echo date("Y-m-d", strtotime("+$i day" . $today)) . "<br>";
}







?>