<?php 
session_start(); 
$username = $_SESSION["username"];
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>阿鈺0831</title>
</head>
    <body>
        <h2>阿鈺的練習網頁</h2>
        <hr>
            <?php include "menu.php" ?>
        <hr>
        <?php
        //檢查username的內容以決定瀏覽者的身份
        if($username != NULL){
        echo "你的帳號：" . $username . "<br>" . 
         "電子郵件：" . $email . "<br>";
        } else{
            echo "歡迎，請登入<br>";
        }
        echo "<hr>";
        include "footer.php";
        ?>
    </body>

</html>
<!-- stateless狀態沒有：使用者在使用browserh時每一次請求都跟上一次沒關係 -->