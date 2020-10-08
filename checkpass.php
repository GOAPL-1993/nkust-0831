<?php
session_start();
// 以下取得來自於表單的info
$redir = $_POST["redir"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// echo $username . "<br>" .
//     $email . "<br>" .
//     $password;
    if($password == "1234"){
        //成功登入要處理的code
        //SESSION好像在共同公佈欄用key ==> value的方式加註info
        //SESSION["key:username"] <== value: $username (來自於表單)
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        //$redir來自於lotto.php?redir=xxx.php的參數
        //它的目的是指引在表單完成後，要前往的目標網頁
        if ($redir != NULL){
            //表示有指定要前往的頁面，所以就要把Location後加上指定的目標網頁
            header("Location:$redir");
        } else {
            //如未指定目標網頁，則前往首頁
            header("Location:index.php");
        }
        exit;
    } else {
        //失敗登入要處理的code
        echo "你的密碼錯誤<br>";
        echo "<a href = 'login.php'>回上一頁重新登入</a>";
        
    }
?>