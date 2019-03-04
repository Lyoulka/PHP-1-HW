<?php
$conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
 $mysql = mysqli_connect('localhost', 'root', '', 'geekbrains');
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $date = date("c");
    $message = $_POST['message'];
    $path = './img/';
    foreach ($_FILES as $file) {
      $img = $file['name'];
    }
    $reset = $_POST['reset'];
    if ($reset) {
        $name = "";
        $message = "";
        $path = "";
        $img = "";
    } 
    if ($img == ""){ 
    $img = "unknown.jpg";
    $query = sprintf("INSERT INTO geekbrains.comments (name, date, message, path, imgName) VALUES (\"%s\", \"%s\", \"%s\", \"%s\", \"%s\" )", $name, $date, $message, $path, $img); 
    } else { 
      $query = sprintf("INSERT INTO geekbrains.comments (name, date, message, path, imgName) VALUES (\"%s\", \"%s\", \"%s\",\"%s\", \"%s\")", $name, $date, $message, $path, $img);
	}
 } 
 if ($query != NULL) {
    $mysql_query = mysqli_query($mysql, $query);
}
