<?php
session_start();
require_once CONFIG_DIR . "db.php";
require_once ENGINE_DIR . 'passwordFunction.php';
include ENGINE_DIR . "getUser.php";

$isAuth = -1;
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $data = $db->queryOne('SELECT id, user_hash_password as hash FROM users WHERE user_login=?', $login);
    $isAuth = 0;
    if ($data) {
        if(confirmPassword($data['hash'], $password)){
            $isAuth = 1;
            $user = getUser();
            $_SESSION["auth"] = true;
            $_SESSION["user_name"] = $user['user_name'];
            $_SESSION["user_login"] = $user['user_login'];
        header( 'location: ../public/personal.php');
        }
    }
}