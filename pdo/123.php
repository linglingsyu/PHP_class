<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫的連線</title>
</head>
<body>
    
<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
//dbname ="資料庫名稱"
$pdo = new PDO($dsn,'root','');
$sql = "select * from students";
// from "資料表名稱"


/*
fetchAll：整個資料表的資料全部撈出來,回傳二微陣列
(取得)fetch:只撈一筆，回傳一維陣列

PDO::FETCH_ASSOC:回傳只會顯示欄位名稱

PDO::FETCH_NUM 

PDO::FETCH_BOTH（預設）

*/
$rows = $pdo -> query($sql) -> fetch(PDO::FETCH_ASSOC); 
echo $rows[1]['name'];
echo "<hr>";
echo $rows[1][6];
echo "<hr>";
echo "<pre>";
print_r($rows);
echo "</pre>";
//啟動PDO的連線，將搜尋sql的資料送到$rows(他是二維陣列)




?>
<table>
<?php
foreach ($rows as $row){
    echo "<tr>";
    echo "<td>".$rows["uni_id"]."</td>";
    echo "<td>".$rows["class_num"]."</td>";
    echo "<td>".$rows["name"]."</td>";
    echo "</tr>";
}
    
?>
</table>
</body>
</html>