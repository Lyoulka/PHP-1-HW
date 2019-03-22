<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
/*Компоненты страницы*/
	include COMPONENT . "header.php";
	include COMPONENT . "authorization.php";
	include COMPONENT . "footer.php";
