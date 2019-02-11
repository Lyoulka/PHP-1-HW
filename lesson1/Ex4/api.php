<?php
if (isset($_POST['name']) && isset($_POST['phone'])){
// Переменные с формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = ""; // Логин БД
$db_password = ""; // Пароль БД
$db_base = ''; // Имя БД
$db_table = ""; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result = $mysqli->query("INSERT INTO ".$db_table." (name,phone) VALUES ('$name','$phone')");
//if ($result == true){
//	echo "Информация занесена в базу данных";
//}else{
//	echo "Информация не занесена в базу данных";
//}
}
?>