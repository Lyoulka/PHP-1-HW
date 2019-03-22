<?php
session_start();
include_once "../model/model.php";
$count = 1;
if (isset($_SESSION["user_login"]) && isset($_SESSION["password"])){
		$login = $_SESSION["user_login"];
	if (isset($_POST["goods_id"]) || isset($_POST["goods_id_delete"]) || isset($_POST["change"])){
		$_SESSION['basket'] = 1;
		if (isset($_POST["goods_id"])){
			$goods_id = $_POST["goods_id"];
		} elseif (isset($_POST["goods_id_delete"])) {
			$goods_id = $_POST["goods_id_delete"];
		} else {
		$goods_id = $_POST["change"];
		}
		$goodTemp = getOneTemp ($mysql, $goods_id, $login,'temp_orders');	

		if (isset($goodTemp)){
			$goods_id = $goodTemp['goods_id'];
			$count = $goodTemp['numbers'];
				if (isset($_POST["goods_id"])){
					$count++;
				} 
				if (isset($_POST["goods_id_delete"]) && $count > 1) {
					$count--;
				} elseif (isset($_POST["goods_id_delete"]) && $count == 1) {
					delete ($mysql, $goods_id, $login, 'temp_orders');
				} 
				if (isset($_POST["change"]) && $_POST["count"] > 0){
					$count = $_POST["count"];
				} elseif (isset($_POST["change"]) && $_POST["count"] == 0) {
					delete($mysql, $goods_id, $login, 'temp_orders');
				}
			editTempOrder($mysql, $goods_id, $login, $count);	

			} elseif (isset($_POST["goods_id"])){
					var_dump($_POST["goods_id"]);
					$good = getOne ($mysql, $goods_id, 'catalogue');
					newTempOrder ($mysql, $goods_id, $good['goods_img'], $good['goods_name'], $good['goods_price'], $count, $login);
				}
		}			
		
		if (isset($_GET['action']) and $_GET['action'] == 'clear'){
			$goodsTemp = getAll ($mysql, 'temp_orders','user_login');
			unset($_SESSION['basket']);
			$query = sprintf("DELETE FROM `temp_orders` WHERE `user_login`='%s'", $login);
			$result = mysqli_query($mysql, $query);
			header ('Location: index.php');
		}
} else {
	include COMPONENT . "authorization.php";
}