<?php
/*Файлы конфигурации*/
    require_once "../config/main.php";
    require_once CONFIG_DIR . "db.php";

/*Компоненты страницы*/
    include COMPONENT . "header.php";
    require_once ENGINE_DIR . 'passwordFunction.php';
    require_once ENGINE_DIR . 'passwordInsert.php';

    if ($success) : ?>
     <div class="message">Регистрация прошла успешно</div>
    <?php endif ?>
<main>
        <div class="login-block">
            <img src="img/1.png" alt="Scanfcode">
            <h1>Введите регистрационные данные</h1>
            <form method="post">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Ваше имя" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <input type="text" name="login" class="form-control" placeholder="Ваш логин" required>
                    </div>
                </div>
                <hr class="hr-xs">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Ваш пароль" required>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </form>
        </div>
    <div class="login-links">
        <p class="text-center">Уже есть аккаунт? <a class="txt-brand" href="login.php"><font color=#29aafe>Авторизуйтесь</font></a></p>
    </div>
 </main>
<? 
    include COMPONENT . "footer.php";
?>