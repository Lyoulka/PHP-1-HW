<?php 
$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = hashPassword($password);
    $db->exec("INSERT INTO geekbrains.users (user_name, user_login, user_hash_password) VALUES (?,?,?)", $username, $login, $password);
    $success = true;
   }