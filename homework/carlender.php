<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlender</title>
    <style>
        table,
        td {
            border: 1px solid #000;
            border-collapse: collapse;
            text-align: left;
            font-size:24px;

        }
        table{
            width: 1000px;
            height: 500px;
        }
        tr,td{
            width: 120px;
            height:80px;           
            padding: 10px;
        }

        table td:first-child {
             color:red;
             font-weight: bold;
        }

        table td:last-child {
             color:#00CC00;
             font-weight: bold;
        }


    </style>
</head>

<body>

    <form action="carlender.php" method="get">
        請輸入年份：<input type="number" name="year">
    </form>

    <table>
        <tr>
            <td>SUN</td>
            <td>MON</td>
            <td>TUE</td>
            <td>WED</td>
            <td>THU</td>
            <td>TUR</td>
            <td>SAT</td>
        </tr>

        <?php
        // $year = date("Y");

        if(isset($_GET["year"])){
            $year= $_GET["year"];
        } 
        $month = date("m");
        $firstday = date("w", strtotime(date("Y-m-01"),));
        $lastday  = date("t", strtotime(date("Y-m-d")));
        echo "現在是" . $year . "年" .   $month  . "月"; 
        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 && $j < $firstday){
                    echo "<td>";
                    echo "</td>";
                }else{
                    echo "<td>";
                    $date = $i * 7 + $j + 1  - $firstday;
                    if ( $date > $lastday ){
                        echo "";
                    }else {
                        echo $date;
                    }
                    echo "</td>";
                }

            }
            echo "</tr>";
        }
        echo "</table>";
        ?>



        <a href="carlender.php?month= <?= $month-1 ?> ">上個月(<?= $month-1 ?>)</a>
        <span>本月(<?= $month ?>)</span>
        <a href="carlender.php?month= <?= $month+1 ?> ">下個月(<?= $month+1 ?>)</a>
</body>

</html>