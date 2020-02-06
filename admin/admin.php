<?php
$noLogin=<<<EOT
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>还没有登录！</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
您还没有登录,请<a href='../login.html'>登录</a>
</body>
EOT;

header('Content-type:text/html; charset=utf-8');
session_start();

if (isset($_COOKIE['code'])) {
    //如果有登录过，传登录状态给session
    $_SESSION['user'] = $_COOKIE['user'];
    $_SESSION['islogin'] = 1;
}
if (isset($_SESSION['islogin'])) {
    // 若已经登录
    echo "你好! ".$_SESSION['user'].' ,欢迎来到管理页面!<br>';
    echo "<a href='logout.php'>注销</a>";
    //TODO：模板页还没做啊啊啊
} else {
    echo $noLogin;
}



