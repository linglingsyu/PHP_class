<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr():中英文都可以用,所以取代substr() </h5>
<?php 

$s = "Hello world";
echo $s;
echo "<br>";
echo substr($s,6,3);
// substr(字串,要從第幾個開始取,取幾個**可忽略**)：回傳取的字串

$s = "哈囉 今天天氣真好";
echo $s;
echo "<br>";
echo mb_substr($s,6,3);
echo "<hr>";

$a = " bbb ";
echo $a;
$b = trim($a);

echo "<hr>";
echo "<h4>" . "str_repeat重複指定字元" . "</h4>";
echo str_repeat("*",5);
 ;

echo "<hr>";
echo "<h4>" . "str_replace 取代字串" . "</h4>";
echo "<p>" . "substr_replace ( search , replace , suvject , count )" . "</p>";
echo "<p>" . "substr_replace ( 要被替換的字串 , 要替換上去的字串 , 原始字串 , 統計更換數量的參數*選用 )" . "</p>";
$d = "aaa hello world";
echo $d;
echo "替換成";
echo str_replace("hello","nohello", $d);


?>
