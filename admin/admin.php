
<!--声明方法，echo下面内容-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>游戏管理</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

</form>
</body>



<?php
header('Content-type:text/html; charset=utf-8');

session_start();

if (isset($_COOKIE['code'])) {
    //如果有登录过，传登录状态给session
    $_SESSION['user'] = $_COOKIE['user'];
    $_SESSION['islogin'] = 1;
}
if (isset($_SESSION['islogin'])) {
    // 若已经登录
    echo "你好! ".$_SESSION['user'].' ,欢迎来到个人中心!<br>';
    echo "<a href='logout.php'>注销</a>";
} else {
    // 若没有登录
    echo "您还没有登录,请<a href='../login.html'>登录</a>";
}
?>

