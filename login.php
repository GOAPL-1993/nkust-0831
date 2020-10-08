<?php
    $redir = $_GET["redir"];
?>
<!DOCTYPE html>
<html>
<head<<meta charset="utf-8">
    <title>阿鈺0831</title>
    </head>
    <body>
        <h2>login my site</h2>
        <hr>
            <?php include "menu.php" ?>
        <hr>
        <form method = "POST" action = "checkpass.php">
            <table width = 400 border = 0>
            <input type = "hidden" name = "redir" value = <?php echo $redir; ?>>
            <tr><td>帳號：</td><td><input type = "text" name = "username"></td></tr>
            <tr><td>電子郵件：</td><td><input type = "text" name = "email"></td></tr>
            <tr><td>密碼：</td><td><input type = "password" name = "password"></td></tr>
            <tr><td align = center colspan = 2><input type = "submit" value = "登入"></td></tr>
            </table>
        </form>
    </body>
    <hr>
            <?php include "footer.php" ?>
</html>
<!-- stateless狀態沒有：使用者在使用browserh時每一次請求都跟上一次沒關係 -->