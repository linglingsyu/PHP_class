<h4>交換變數</h4>
<hr>
$a = 5 ;<br>
$b = 10 ;<br>
$tmp = $a ; <br>
$a = $b; <br>
$b = $tmp ;<br>

<h4>反轉陣列</h4>
<p>在不產生新陣列的狀況,將一個陣列的元素順序反向</p>
<pre>
$a = [2,4,6,1,8] => $a = [8,1,6,4,2]
a[0]跟a[4]交換
a[1]跟a[3]交換
a[2]跟a[2]交換
</pre>

<?php 

$a = [2,4,6,1,8];
echo "<pre>";print_r($a);echo "</pre>";
$run = floor(count($a)/2); //迴圈總共只要跑幾次  floor 無條件捨去 celi 無條件進位
for ($i = 0; $i < $run ; $i++){
    $index = count($a)-1-$i;
    $tem = $a[$i];
    $a[$i] = $a[$index];
    $a[$index] = $tem;
}
echo "反轉後";
echo "<pre>";print_r($a);echo "</pre>";

echo "<h4>"."若利用array_reverse函式解(會回傳新陣列(不影響原陣列))"."</h4>";

$a = [2,4,6,1,8];
$b = array_reverse($a);
echo "<pre>";print_r($a);echo"</pre>";
echo "<br>";
echo "<pre>";print_r($b);echo"</pre>";

?>




