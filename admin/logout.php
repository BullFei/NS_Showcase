<?php
header('Content-type:text/html; charset=utf-8');

session_start();

if (isset($_COOKIE['code'])) {
    //已登录则清除登录状态
    $username = $_SESSION['user'];
    $_SESSION = array();
    session_destroy();
    setcookie('user', '', time() - 99);
    setcookie('code', '', time() - 99);
    echo "欢迎下次光临, ".$username.'<br>';
    echo "<a href='../login.html'>重新登录</a>";
} else {
    //未登录就算了
    echo "请先登录<br>";
    echo "<a href='../login.html'>登录</a>";
}



