<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
    <style>
        body {
            font-family: Arial, "Microsoft JhengHei";
            font-size: 14px;
        }

        input:focus {
            background-color: #ff0;
        }

        form{
            width: 400px;
            margin: 0 auto;
        } 
         p{
            text-align: center;
        }
    </style>
</head>

<body>
    <p>BMI值計算公式: BMI = 體重(公斤) / 身高^2(公尺^2)</p>

    <form action="?" method="post">
        請輸入您的身高(cm)：<input type="number" name="height" id=""><br>
        請輸入您的體重(kg)：<input type="number" name="weight" id=""><br>
        <input type="submit" value="送出">

        <?php

        // $weight=$_GET['weight'];
        //$_GET[欄位名稱,要等同html的name]
        // $height=$_GET['height'];

        // isset()變數是否存在 or empty()

        //先判斷$_POST['weight']及$_POST['height']變數是否存在,存在才執行下列程式
        //否則會出現undefined index
        if (isset($_POST['weight']) && isset($_POST['height'])) {

            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $height2 = $height / 100;
            $bmi = round($weight / ($height2 * $height2), 2);
            if ($bmi < 18.5) {
                $fat = "體重過輕";
            } elseif ($bmi >= 18.5 && $bmi < 24) {
                $fat = "正常體態";
            } elseif ($bmi >= 24 && $bmi < 27) {
                $fat = "過重";
            } elseif ($bmi <= 27 && $bmi < 30) {
                $fat = "輕度肥胖";
            } elseif ($bmi <= 30 && $bmi < 35) {
                $fat = "中度肥胖";
            } else {
                $fat = "重度肥胖";
            }
            echo "您輸入的身高(cm)是：" . $height . "公分" . "<br>";
            echo "您輸入的體重(kg)是：" . $weight . "公斤" . "<br>";
            if (!empty($height)) {
                echo "您的BMI是:" . $bmi . $fat;
            } else {
                echo "<span style='color:red;'>請輸入正確的身高值</span>";
            }
        }
        ?>

    </form>



</body>

</html>