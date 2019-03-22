function item(goods_id){
	$.ajax({
		type: 'POST',
		url:'../engine/basket.php',
		data: 'goods_id='+ goods_id,
		success: function(data){
			alert("Вы добавили товар в корзину!");
			$(".basket-items").html(data);
		}
	});
}

function deleteItem(goods_id){
	$.ajax({
		type: 'POST',
		url:'../engine/basket.php',
		data: 'goods_id_delete='+ goods_id,
		success: function(data){
			alert("Вы удалили единицу товара из корзину!");
			$(".basket-items").html(data);
		}
	});
}
function change(goods_id){
	var value = document.getElementById("count"+goods_id).value;
	$.ajax({
		type: 'POST',
		url:'../engine/basket.php',
		data: {change:goods_id,count:value},
		success: function(data){
			alert("Вы изменили количество товара в корзине!");
			$(".basket-items").html(data);
		}
	});
}
function changeStatus(user_login){
	var value = document.getElementById("order_status"+user_login).value;
	$.ajax({
		type: 'POST',
		url:'../engine/orderStatus.php',
		data: {change:user_login,order_status:value},
		success: function(data){
			alert("Вы изменили статус заказа!");
			$(".order-items").html(data);
		}
	});
}

