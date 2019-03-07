<?php
session_start();
 	if(!$_SESSION['auth']){
 		header("Location: /login.php");
 	exit;
	}
/*Файлы конфигурации*/
    require_once "../config/main.php";
/*Компоненты страницы*/
	include COMPONENT . "header.php";
	?>
		<h1>Добрый день, <?=$_SESSION["user_name"]?>!</h1>
		<p>Ваш логин: <?=$_SESSION["user_login"]?></p>
	<?
	include COMPONENT . "footer.php";?>