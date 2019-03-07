<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
    $conDB = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);
/*Компоненты страницы*/
	include COMPONENT . "header.php";
	include ENGINE_DIR . "getGoods.php";
	renderGoods($conDB);
	include COMPONENT . "footer.php";

?>