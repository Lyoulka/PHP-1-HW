<?php
if ($_SESSION['auth']) {?>
    <h5 class="mt-3 alert-success">Здравствуйте, капитан <?=$_SESSION["user_name"]?><br>
    Корабль в Вашем распоряжении</h5>

<? } else {?>
    <h5 class="mt-3 alert alert-danger">Доступ к контенту ограничен. Войдите, чтобы продолжить</h5>
<? die;}
