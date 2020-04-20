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
            font-size: 24px;

        }

        table {
            width: 1000px;
            height: 500px;
        }

        tr,
        td {
            width: 120px;
            height: 80px;
            padding: 10px;
        }

        table td:first-child {
            color: red;
            font-weight: bold;
        }

        table td:last-child {
            color: #00CC00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <form action="?" method="get">
            <select name="year" id="">
                <?php
                if (isset($_GET["year"])) {
                    $year =  $_GET["year"];
                } else {
                    $year = date("Y");
                }

                if (isset($_GET["month"])) {
                    $month =  $_GET["month"];
                } else {
                    $month = date("n");
                }
                for ($j = 100; $j >= 0; $j--) {
                    $upY = $year - $j;
                    echo "<option value='$upY'>" . $upY . "</option>";
                }
                echo "<option value='$year' selected>" . $year . "</option>";
                for ($i = 1; $i <= 100; $i++) {
                    $nextY = $year + $i;
                    echo "<option value='$nextY'>" . $nextY . "</option>";
                }
                ?>
            </select>
            <select name="month" id="">
                <?php
                for ($j = 1; $j <= $month - 1; $j++) {
                    echo "<option value='$j'>" . $j . "</option>";
                }
                echo "<option value='$month' selected>" . $month . "</option>";
                for ($i = $month + 1; $i < 13; $i++) {
                    echo "<option value='$i'>" . $i . "</option>";
                }
                ?>
            </select>
            <input type="submit" value="查詢">
        </form>
    </div>
    <?php



    $firstday = date("w", strtotime(date("$year-$month-01")));
    $lastday  = date("t", strtotime(date("$year-$month-d")));
    ?>
    <a href="calendar.php?year=<?= $year ?>&month=<?= $month - 1 ?>">&lt;&lt;</a>
    <span><?= $year . $month  ?></span>
    <a href="calendar.php?year=<?= $year ?>&month=<?= $month + 1 ?>">&gt;&gt;</a>

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

        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 && $j < $firstday) {
                    echo "<td>";
                    echo "</td>";
                } else {
                    echo "<td>";
                    $date = $i * 7 + $j + 1  - $firstday;
                    if ($date > $lastday) {
                        echo "";
                    } else {
                        echo $date;
                    }
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>




</body>

</html>