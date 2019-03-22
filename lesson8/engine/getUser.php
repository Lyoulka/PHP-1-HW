<?php

function getUser($mysql)
{
    $login_post = $_POST["login"];
    $query = sprintf('SELECT * FROM `users` WHERE `user_login`="%s" LIMIT 1', $login_post);
    $mysql_query = mysqli_query($mysql, $query);
    $user = NULL;
    while ($row = mysqli_fetch_assoc($mysql_query)) {
        $user[] = $row;
    }
    mysqli_close($mysql);
    return $user[0];
}