<main>
		<div class="ofder-form">
			<h3>Введите данные для доставки</h3>
			<hr class="hr-xs">
			<form method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
						<input type="text" name="name" class="form-control" placeholder="Введите имя получателя"<?=$able;?>required>
					</div>
					<hr class="hr-xs">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
						<input type="text" name="surname" class="form-control" placeholder="Введите фамилию получателя"<?=$able;?>required>
					</div>
					<hr class="hr-xs">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
						<input type="text" name="city" class="form-control" placeholder="Введите город доставки"<?=$able;?>required>
					</div>
					<hr class="hr-xs">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
						<input type="text" name="adress" class="form-control" placeholder="Введите адрес доставки"<?=$able;?>required>
					</div>
				</div>
				<hr class="hr-xs">
				<h4>Ваш заказ</h4>
				<p>Ниже представлены товары, добавленные в вашу корзину:</p>
				<?= createBasketOrder($_SESSION["user_login"], 'temp_orders', $mysql); ?>
				<button class="btn btn-primary btn-block" type="submit" <?=$able;?>>ОФОРМИТЬ ЗАКАЗ</button>
			</form>
</main>