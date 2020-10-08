<?php 
session_start (); 
$username = $_SESSION["username"];
$email = $_SESSION["email"];
$link_homepage = "<a href='index.php'> 首頁 </a> ";
$link_login = "<a href='login.php'> 登入 </a> ";
$link_lotto = "<a href='lotto.php'> 樂透預測 </a> ";
$link_compare = "<a href='compare.php'> 產品比較 </a> ";
$link_logout = "<a href='logout.php'> 登出 </a> ";

echo $link_homepage;
 if ($username == NULL) { 
    //訪客的話，執行這裡
    echo $link_login;
 } else { 
     //會員的話，執行這裡
     echo $link_lotto;
     echo $link_compare;
    echo $link_logout;
} 
?>