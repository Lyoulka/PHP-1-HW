<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
/*Компоненты страницы*/
	include_once "../model/model.php";
	include COMPONENT . "header.php";
	include ENGINE_DIR . "create_basket.php";
	include COMPONENT . "authorization.php";
	echo '<h2>Управление заказами</h2>';
	createAdminBasket($mysql);
	include COMPONENT . "footer.php";
