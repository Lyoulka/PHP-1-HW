<?php 
	
/*Файлы конфигурации*/
    require_once "../config/main.php";
    include ENGINE_DIR. "session_start.php";
/*Компоненты страницы*/
	include COMPONENT . "header.php";
?>
<?php
switch ($isAuth) {
    case 1:
        echo '<div class="message">Авторизация прошла успешно</div>';
        break;
    case 0:
        echo '<div class="error">Неверный логин и(или) пароль</div>';
        break;
}
?>
	<main>
		<div class="login-block">
			<img src="img/unknown.png" alt="Scanfcode">
			<h1>Введите свои данные</h1>
			<form method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
						<input type="text" name="login" class="form-control" placeholder="Ваш логин">
					</div>
				</div>
				<hr class="hr-xs">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
						<input type="password" name="pass" class="form-control" placeholder="Ваш пароль">
					</div>
				</div>
 			  <!-- 	<div class="main-checkbox">
                    <input  type="checkbox" value="none" id="checkbox1" name="check"/>
                    <label for="checkbox1"></label>
                </div>
            <span class="text">Запомнить</span> -->
				<button class="btn btn-primary btn-block" type="submit">ВОЙТИ НА САЙТ</button>
			</form>
		</div>
	<div class="login-links">
		<p class="text-center">Еще нет аккаунта? <a class="txt-brand" href="registration.php"><font color=#29aafe>Регистрируйся</font></a></p>
	</div>
 </main>


<?php 
	include COMPONENT . "footer.php";
?>