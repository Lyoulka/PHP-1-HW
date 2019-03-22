<?php
 echo "<h2>Заказы</h2>";

 if (isset($_SESSION["user_login"]) && isset($_SESSION["password"])){
 	
 		$login = $_SESSION["user_login"];
 		$goodsTemp = getOneOrder($mysql, $login, 'geekbrains.orders');
 		$message = '<p>Ниже представлены товары, добавленные в ваш заказ:</p>';
		createBasketOrder($login, 'orders', $mysql);
	
 }
