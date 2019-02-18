<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
		$title = 'Frontend-разработчик и веб-верстальщик | Дмитрий Алексеев';
		$h1 = 'Дмитрий <br>Алексеев';
		$year = date('o');
	?>
	<meta charset="UTF-8">
	<title><?=$title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/main.js" defer></script>
	<?php require 'api.php'; ?>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="navigation">
				<nav>						
				<div class="gamburger1">
					<div class="gamburger2">
					<i class="fa fa-bars gamburger3" datas="off"></i>
						<div class="gamburger4">
							<ul class="gamburger5">
								<?php $menu=['Услуги' => ['Верстка', 'Дизайн', 'Сайт &laquo;под ключ&raquo;'], 
									'Портфолио' => ['Все работы','Верстка', 'Дизайн', 'Сайты &laquo;под ключ&raquo;', 'Разное'],
									'Стоимость'=> ['Верстка', 'Дизайн', 'Сайт &laquo;под ключ&raquo;']];
									foreach ($menu as $key => $value) {
									echo "<li><a href=''>$key</a><ul class='inline_list'>";
										foreach ($value as $key => $value) {
											echo "<li ><a  href=''>$value</a></li>";
										}
									echo '</ul></li>';	
									}
									
									unset($value);?>
							</ul>
						</div>
					</div>
				</div>
				</nav>
			</div>
			<div class="contact-container">
				<span class="phone">+7 495 999-55-77</span>
				<button id="first-button" class="call-me">Заказать звонок</button>
			</div>
		</div>
		<div id="popupContainer">
			<div id="popup">
				<h2>Форма заявки</h2>
				<form action="" method="POST" id="form">
					<div>
						<p><input id="name" type="text" name="name" id="author" placeholder="Имя" required></p>
						<p><input id="phone" type="tel" name="phone" id="phone" placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required></p>
						<p><button id="sendButton" type="submit" id="submit" class="go">Заказать проект</button></p>
						<p id="checkbox"><input type="checkbox" required id="agree"/><label for="checkbox">Я согласен с условиями обработки персональных данных</label></p>
					</div>
				</form>
				
			</div>
		</div>
		
		<div class="introdaction">
			<h1><?=$h1;?></h1>
			<span id="description">Frontend-разработчик и веб-верстальщик</span>
			<button class="more-info">Узнать больше</button>
		</div>
<div class="brackets">			
		<div class="skills">
			<h3>Что я делаю</h3>
			<div class="items-1">
				<div class="item-1">
					<img src="img/tools-and-utensils.png">
					<p>Верстка лендинг-страниц и сайтов любой сложности</p>
				</div>
				<div class="item-1">
					<img src="img/responsive.png">
					<p>Адаптивная верстка под все браузеры и устройства</p>
				</div>
				<div class="item-1">
					<img src="img/programming.png">
					<p>Frontend-разработка и программирование</p>
				</div>	
				<div class="item-1">
					<img src="img/coding.png">
					<p>Исправление и доработка существующей вёрстки</p>
				</div>
			</div>
			<button class="more-info">Узнать стоимость</button>
		</div>
</div>		
		<div class="example">
			<h3>Примеры моих работ</h3>
			<div class="items-2">
				<div class="item-2">
					<img src="img/Layer_2.jpg" alt="Пример сайта 1">
					<p>Сайт психолога Веры Антоновой</p>
				</div>
				<div class="item-2">
					<img src="img/Layer_1.jpg" alt="Пример сайта 2">
					<p>Сайт магазина детской одежды</p>
				</div>
				<div class="item-2">
					<img src="img/Layer_3.jpg" alt="Пример сайта 3">
					<p>Сайт магазина &laquo;Рыболов&raquo;</p>
				</div>	
			</div>
			<button class="more-info">Заказать проект</button>
		</div>
<div class="brackets-1">		
		<div class="action">
			<h3>Адаптивная верстка под все устройства и браузеры от 1000 рублей всего за 4 часа.*</h3>
			<p id="definition"><sup>*</sup>Срок и стоимость могут отличаться от заявленных и рассчитываются индивидуально, в зависимости от сложности задач.</p>
		</div>
</div>		
		<div class="reference">
			<div class="list">
				<ul>
					<li><a href="">Услуги</a></li>
					<li><a href="">Портфолио</a></li>
					<li><a href="">Стоимость</a></li>
				</ul>
			</div>
			<div class="contacts">
				<span><img src="img/call-answer.png" alt="Номер телефона"> +7 495 999-55-77</span><br>
				<span><img src="img/envelope.png" alt="Email"> dmitry@alekseev.com</span>
			</div>
			<div class="networks">
				<button id="second-button" class="call-me">Заказать звонок</button>
				<div class="icons">
					<a href=""><img src="img/vk-logo.png" alt="VK"></a>
					<a href=""><img src="img/facebook-logo.png" alt="Facebook"></a>
					<a href=""><img src="img/twitter-logo.png" alt="Twitter"></a>
					<a href=""><img src="img/instagram-logo.png" alt="Instagram"></a>
				</div>	
			</div>
		</div>
	</div>
	<footer>
		<p>&copy; Дмитрий Алексеев, 2016 &mdash; <?=$year;?></p>
	</footer>
</body>
</html>