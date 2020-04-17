<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <style>
        form{
            display: block;
            margin: 100px auto;
            width: 1000px;
            height:200px;
            text-align: center;
            padding:10px;
            border:1px solid #999;
            box-shadow:0 0 5px #ccc;
        }

        form div {
            padding:10px;
        }

        form div input[type="text"],form div input[type="password"] {
            font-size:20px;
            padding:5px 2px;
            width: 70%;
        }





    </style>
</head>

<body>
    <?php
    $showLoginForm = true; 
    if (isset($_GET["status"])) {
        switch ($_GET["status"]) {
            case "login":
                $showLoginForm = false;
                echo "您已登入";
                break;
            case "fail":
                echo "帳號密碼錯誤";
                break;
        }
    }
    ?>

    <?php
    if ($showLoginForm) {
        //若showLoginForm為真，顯示登入表單，為false,顯示中大獎
    ?>
        <form action="user.php" method="post">
            <div>
            <label for="acc">請輸入您的帳號：</label>
            <input type="text" name="acc" id="acc">
            </div>
            <div>
            <label for="password">請輸入您的密碼：</label>
            <input type="password" name="psw" id="password">
            </div>
            <div>
                <input type="submit" value="送出">
                <input type="reset" value="重置">
            </div>
        </form>


    <?php
        } else {
    ?>
            <h1>恭喜你中大獎了!!! 口罩1000個get!! </h1>

    <?php
    }
    ?>




</body>

</html>