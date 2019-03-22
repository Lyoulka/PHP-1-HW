<?php
session_start();
include_once "../model/model.php";
$order_status = "Ожидает подтверждения";
if (isset($_POST["change"])){
	$user_login = $_POST["change"];
	$order_status = $_POST["order_status"];
}
	$sql = "UPDATE geekbrains.orders SET order_status='%s' WHERE user_login='%s'";
	$query = sprintf($sql, mysqli_real_escape_string($mysql, $order_status), $user_login);
	$result = mysqli_query($mysql, $query);
	if (!$result)
		die(mysqli_error($mysql));
	return mysqli_affected_rows($mysql);