<h4>字串"好的，中國武漢肺炎"　請將武漢肺炎四字放大並變色</h4>

<?php 

$str = "好的，中國武漢肺炎";
/*
$str2 = "<span style='color:red;font-size:24px'>" .  mb_substr($str,5,4) . "</span>";
// echo $str2;
$str = str_replace("武漢肺炎",$str2,$str);
echo $str;
*/

$search="武漢肺炎";
$target = "<span style='color:red;font-size:24px'>武漢肺炎</span>";
echo str_replace($search,$target,$str);

?>

<!-- 好的，中國<span style="color:red;font-size:24px">武漢肺炎</span>; -->