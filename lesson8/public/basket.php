<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
/*Компоненты страницы*/
	include ENGINE_DIR . "basket.php";
	include COMPONENT . "header.php";
	include ENGINE_DIR . "create_basket.php";
	createBasket($login, $mysql);
	include COMPONENT . "footer.php";
