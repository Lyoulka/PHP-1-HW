<?php 
$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$able = '';
    $username = $_POST['username'];
    $login = $_POST['login'];
    $user = getAll($mysql, 'users', 'user_id');
    if (strtolower($login) == 'admin'){
    	exit ("Логин админа нельзя зарегистрировать!");
    }
    foreach ($user as $item){
    	if ($login == $item['user_login']){
    		exit ("Такой логин уже есть!");
    	}
    }
    $password = $_POST['password'];
    $admin = 0;
    $password = hashPassword($password);
    $db->exec("INSERT INTO `users` (`user_name`, `user_login`, `user_hash_password`, `admin`) VALUES (?,?,?,?)", $username, $login, $password, $admin);
    $success = true;
   }
