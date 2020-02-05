<?php
header('Content-type:application/json');
require "setting.php";

session_start();

$user = trim($_POST['username']);
$pwd = trim($_POST['password']);
if ($user == "" || $pwd == "") {
    echo "[{\"result\":\"empty\"}]";
} elseif (($user != $username) || ($pwd != $password)) {
    echo "[{\"result\":\"wrong\"}]";
} elseif (($user == $username) || ($pwd == $password)) {
    echo "[{\"result\":\"success\"}]";
    //保留登录状态七天
    $_SESSION['user'] = $user;
    $_SESSION['islogin'] = 1;
    setcookie('user', $user, time()+7*24*60*60);
    setcookie('code', md5($user.md5($pwd)), time()+7*24*60*60);
} else {
    echo "[{\"result\":\"fail\"}]";
}
