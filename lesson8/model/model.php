<?php
require_once "../config/db.php";
function getAll ($mysql, $table, $orderby){
	$query = "SELECT * FROM `{$table}` order by `{$orderby}` desc";
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	$n = mysqli_num_rows($result);
	$res = array();
	for($i = 0; $i < $n; $i++){
		$row = mysqli_fetch_assoc($result);
		$res[] = $row;
	}
	return $res;
}
function getOne ($mysql, $id, $table){
	$query = sprintf("SELECT * FROM `{$table}` where `goods_id`=%d", (int)$id);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));	
	$res =  mysqli_fetch_assoc($result);
	return $res;
}
function getOneOrder ($mysql, $login, $table){
	$query = sprintf("SELECT * FROM {$table} where user_login='%s'", $login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	$n = mysqli_num_rows($result);
	$res = array();
	for($i = 0; $i < $n; $i++){
		$row = mysqli_fetch_assoc($result);
		$res[] = $row;
	}
	return $res;
}
function delete ($mysql, $id, $login, $table) {
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM `{$table}` WHERE `goods_id`=%d AND `user_login`='%s'", (int)$id, $login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	return mysqli_affected_rows($mysql);
}
function deleteBasket ($mysql, $login, $table) {
	$query = sprintf("DELETE FROM `{$table}` WHERE `user_login`='%s'", $login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	return mysqli_affected_rows($mysql);
}
function newTempOrder($mysql, $goods_id, $goods_img, $goods_name, $goods_price, $numbers, $login){
	$t = "INSERT INTO `temp_orders` (`goods_id`, `goods_img`, `goods_name`, `goods_price`, `numbers`, `user_login`) VALUES (\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\")";
	$query = sprintf($t, mysqli_real_escape_string($mysql, $goods_id), mysqli_real_escape_string($mysql, $goods_img),mysqli_real_escape_string($mysql, $goods_name), mysqli_real_escape_string($mysql, $goods_price), mysqli_real_escape_string($mysql,$numbers), mysqli_real_escape_string($mysql,$login)); 
	$result = mysqli_query($mysql, $query);
	if (!$result){
		die(mysqli_error($mysql));
	}
	return true;
}

function editTempOrder($mysql, $id, $login, $count){
	$id = (int)$id;
	$sql = "UPDATE `temp_orders` SET `numbers`='%d' WHERE `goods_id`='%d' AND `user_login`='%s'";
	$query = sprintf($sql, mysqli_real_escape_string($mysql, $count), $id, $login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	return mysqli_affected_rows($mysql);
}

function getOneTemp ($mysql, $id, $login, $table) {
	$query = sprintf("SELECT * FROM `{$table}` WHERE `goods_id`=%d AND `user_login`='%s'", (int)$id, $login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	$res = mysqli_fetch_assoc($result);
	return $res;
}