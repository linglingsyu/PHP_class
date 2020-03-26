
<?php


//陣列宣告方式 a~f
$a=[1,2,3,4];
$b=["小明","小華","小強","阿國"];

echo "<pre>";print_r($a);"</pre>";
echo "<br>";
echo "<pre>";print_r($b);"</pre>";

$c=[12=>"小明",23=>"曉華",30=>"小強",40=>"阿國"];
echo "<br>";
echo "<pre>";print_r($c);"</pre>";

$d=["小明"=>12,"曉華"=>23,"小強"=>30,"阿國"=>40];
echo "<br>";
echo "<pre>";print_r($d);"</pre>";
echo $d["曉華"];

$e[]=12;
$e[]=22;
$e[]=333;
$e[]=39;
$e[22]="小明";
$e[333]="小華";
$e[39]="阿國";
$e[12]="小美";
echo "<pre>";print_r($e);"</pre>";

echo "<hr>";

$f["小明"]=22;
$f["阿華"]=33;
$f["小強"]=30;
echo "<pre>";print_r($f);"</pre>";

echo "<hr>";
echo "<hr>";


//陣列的維度：陣列裡面有陣列

$g=[[1,2,3],[4,5,6],[7,8,9]];
echo "<pre>";print_r($g);echo "</pre>";

$h=[
    "小明"=>["國文"=>32,"英文"=>60,"歷史"=>99],
    "曉華"=>["國文"=>90,"英文"=>90,"歷史"=>100],
    "小強"=>["國文"=>88,"英文"=>75,"歷史"=>80],
    "阿國"=>100
];
echo "<pre>";print_r($h);echo "</pre>";


//常用函式

// 1. is_array(變數) 檢查或尋找變數是否為陣列,回傳布林值(1=true;0=false)
echo "count (\$h)=>";
echo count ($h);
echo "<br>";
echo "is_array (\$h)=>";
echo is_array($h);
echo "<hr>";
// 2. in_array() 檢查或尋找變數是否在此陣列內,回傳布林值(1=true;0=false)
echo in_array(100,$h);
echo "<hr>";
// 3. sort 陣列排序(由小到大) 並會改變原本陣列的內容
// 4. array_fill()： 
$a1=array_fill(0,10,"blue");
print_r($a1);
// 5. array_

//6.array_keys


?>