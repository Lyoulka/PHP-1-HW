<?php
session_start();
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";
/*Компоненты страницы*/
	include_once "../model/model.php";
	include ENGINE_DIR . "getContactInformation.php";
	include ENGINE_DIR . "create_basket.php";
	include COMPONENT . "header.php";
	include COMPONENT . "authorization.php";
	include ENGINE_DIR . "contact_form.php";
	include COMPONENT . "footer.php";
