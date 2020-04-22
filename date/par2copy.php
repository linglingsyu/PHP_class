<h4>月曆製作</h4>

<?php 
if (isset($_GET["year"])){
    //有輸入值就用輸入的值
    $year = $_GET["year"]; 
}else{
    //如果沒有就用本機當下的年度
    $year=date("Y");
}

if (empty($_GET["year"])){
    $year=date("Y");
}

?>


<style>
    body {
        margin: 0;
    }

    h4 {
        text-align: center;
        padding-top: 50px;
        font-size: 24px;
    }

    table,
    tr,
    td {
        border: 1px solid #ccc;
        padding: 10px;
        width: 30px;
        height: 30px;
        font-size: 16px;
        border-collapse: collapse;
        text-align: center;
    }
    
    table tr:nth-child(2) {
        background-color: #FFC1E0;
    }

    table td:nth-child(1),table td:nth-child(7){
        color:#ff0000;
    }


    .container {
        width: 1200px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }
    .item {
        margin: 0px 10px 0 10px;
        flex-basis: 280px;
    }
    .year {
        text-align: center;
        margin: 30px 0;
    }
</style>


<?php



echo "<div class='container'>";

// for ($m = 1; $m < 13; $m++) {
//     echo "<div class='item'>";
?>


    <table>
        <tr>
        <td colspan="7" style="color:#000000"><?= $year . "年" . date('m'); ?>月</td>
        </tr>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>

        <?php

        $day = "$year-m-01";
        $firstday = date("w", strtotime($day));
        echo "<br>";
        $lastday = date("t", strtotime($day));
        // echo "本月有" . $lastday . "天";
        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 && $j < $firstday) {
                    // 讓第一天前面的格子印空白
                    echo "<td>";
                    echo "</td>";
                } else {
                    echo "<td>";
                    // 
                    $date = ($i * 7 + $j + 1) - $firstday;
                    if ($date <= $lastday) {
                        echo $date;
                    }
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

    <?php
    echo "</div>";
    ?>
<div>
    <form action="?" method="get">
       請輸入年份： <input type="number" name="year" >
        <input type="submit" value="產生年曆">
    </form>
</div>
    </div>