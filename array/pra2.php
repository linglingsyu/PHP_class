<h4>威力彩號碼</h4>

<?php

//亂數函式

for ($i = 0; $i < 6; $i++) {
    $num[] = rand(1, 38);
}

echo "<pre>";
print_r($num);
echo "</pre>";


/*
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 6; $j++)
        if ($i != $j && $num[$i] == $num[$j]) {
          //  unset($num[$j]);  移除陣列的值
          //  array_splice($num,$j,1);  移除陣列的值
            $num[$j] = rand(1, 38);  //直接更新陣列的值,但是有可能還是跑到重複的
        }
}
*/




foreach ($num as $n) {
    echo $n . " , ";
}




?>

<hr>

<?php 


$num = [];
while (count($num) < 6) {
    $tmp = rand(1,38);

    if(count($num)>0){
        if(!in_array($tmp,$num)){
            $num[] = $tmp;
        }else{
            echo "有重複". $tmp;
        }
    }else{
        //放第一個元素
        $num[] = rand(1,38);
    }
}

foreach ($num as $n) {
    echo $n . " , ";
}
?>


<h4>我自己的想法</h4>
<p>產生一亂數就去檢查陣列有沒有此數字,沒有再放進去,有再重新產生一個數字放進去</p>

<?php 

$arr = [];
for($i = 0; $i < 6; $i++){
    $a = rand(1,38);
    if ( !in_array($a,$arr) ){
        $arr[] = $a;      //如果a不在陣列內,將a值寫入$arr這個陣列
    }else{
        $b = rand(1,38);  // a在陣列內(代表重複),$b產生一亂數跟a比較,如果不同將b放到arr
        while ($b == $a){ // 那如果還是一樣,再rand一次跟a比較,直到b不等於a,將b值放到arr內
            $b = rand(1,38);
        }
            $arr[] = $b;    
        }             
    }

echo "<pre>"; print_r($arr); echo "</pre>";





?>