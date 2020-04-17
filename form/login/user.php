<?php
// isset() 值是否存在  回傳值:bool; empty() 值是否是空值(0 or null)  回傳值:bool
if(!empty($_POST)){
    //如果$_POST為非空值時
    $acc = $_POST["acc"];
    $psw = $_POST["psw"];
    echo "acc：". $acc;
    echo "<br>";
    echo "passwar：".$psw;
    echo "<br>";
    if($acc=="admin" && $psw == "1234"){
        echo "登入成功";
        $status = "login";
    }else{
        echo "帳號密碼錯誤，請重新輸入";
        $status = "fail";
    }
}
?>

<a href="login.php?status=<?php $status;?>">回首頁</a>

