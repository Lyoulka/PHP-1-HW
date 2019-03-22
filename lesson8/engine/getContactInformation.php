<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_SESSION["user_login"];
    $user_id = $_SESSION["user_id"];
    $user_name = $_POST["name"];
    $user_surname = $_POST["surname"];
    $user_city = $_POST["city"];
    $user_adress = $_POST["adress"];
    $goodsTemp = getOneOrder($mysql, $login, 'temp_orders');
    $order_status = "Ожидает подтверждения";
    foreach ($goodsTemp as $good) {
	$t = "INSERT INTO `orders` (`user_id`, `user_login`, `user_name`, `user_surname`, `user_city`, `user_adress`, `goods_id`, `goods_name`, `numbers`, `goods_price`, `order_status`) VALUES (\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\")";
	$query = sprintf($t,  mysqli_real_escape_string($mysql, $user_id),  mysqli_real_escape_string($mysql, $login),  mysqli_real_escape_string($mysql, $user_name),  mysqli_real_escape_string($mysql, $user_surname),  mysqli_real_escape_string($mysql, $user_city),  mysqli_real_escape_string($mysql, $user_adress), mysqli_real_escape_string($mysql, $good['goods_id']), mysqli_real_escape_string($mysql, $good['goods_name']),  mysqli_real_escape_string($mysql,$good['numbers']), mysqli_real_escape_string($mysql, $good['goods_price']), mysqli_real_escape_string($mysql, $order_status)); 
	$result = mysqli_query($mysql, $query);
	}
	unset($_SESSION['basket']);
	deleteBasket ($mysql, $login, 'temp_orders');
	if ($_SESSION['basket'] == 0){
		header ('Location:user_orders.php');
	}
	if (!$result){
		die(mysqli_error($mysql));
	}
	return true;
}
