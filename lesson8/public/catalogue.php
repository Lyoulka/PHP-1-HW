<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
   /* $conDB = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);*/
/*Компоненты страницы*/
	include COMPONENT . "header.php";
	include ENGINE_DIR . "getGoods.php";
	include ENGINE_DIR . "basket.php";
	renderGoods($mysql);
	include COMPONENT . "footer.php";

?>