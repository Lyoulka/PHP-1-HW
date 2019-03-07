<?php

function getUser()
{
    $login_post = $_POST["login"];
    $mysql = mysqli_connect('localhost', 'root', '', 'geekbrains');
    $query = sprintf('SELECT * FROM users WHERE user_login="%s" LIMIT 1', $login_post);
    $mysql_query = mysqli_query($mysql, $query);
    $user = NULL;
    while ($row = mysqli_fetch_assoc($mysql_query)) {
        $user[] = $row;
    }
    mysqli_close($mysql);
    return $user[0];
}