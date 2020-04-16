<h4>字串函式練習</h4>
<div>字串 aassw123</div>

<?php

echo "<h4>"."練習1：將字串aassw1123改成*********"."</h4>";
echo "<h4>"."用for 迴圈跑"."</h4>";
echo "<br>";

$str = "aaddw1123";
$str2 = "";

// echo $str[0];

for ($i = 0; $i < strlen($str); $i++){
    $str2 = $str2 ."*";
    echo "i = " . $i . " => " . $str2 . "<br>";
}

echo "結果就是 => " . $str2;

echo "<hr>";

// str_repeat("要重複的字元",重複次數);

echo "<h4>"."用str_repeat()跑"."</h4>";
$str3 = str_repeat( "*" , strlen($str) );
echo $str3;
echo "<hr>";
echo str_repeat("好",20);

?>

echo "<hr>";

<h4>字串切割</h4>
<div>this is a book</div>
<?php

$str = "this is a book";
$strArr = explode(" ",$str);
echo "<pre>";
print_r($strArr);
echo "</pre>";

echo $strArr[3];

?>

<hr>

<h4>將上列陣列重新組合成"this is a book"</h4>

<?php

echo "使用implode(間格符號,陣列) 合併陣列元素" ;
echo "<br>";
$str3 = implode(" ",$strArr);
echo $str3;
echo "<br>";
echo "使用join(間格符號,陣列) 合併陣列元素" ;
echo "<br>";
$str3 = join(" ",$strArr);
echo $str3;




?>

<hr>
<h4>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
</h4>

<?php

$str = "The reason why a great man is great is that he resolves to be a great man";
// $strarr = explode(" ",$str);
// echo "<pre>";
// print_r($strarr);
// echo "<pre>";
// echo $strarr[0] ." ". $strarr[1] . "...";
$str2 = mb_substr($str,0,10);
echo $str2 . "...";


?>
