<?php
 $pdo = new PDO('mysql:host=localhost;dbname=', '', '');
	$stmt = $pdo->prepare('SELECT * FROM authors');
	$stmt->execute();
	foreach ($stmt as $row) {
	    echo $row['id']; echo '_';
		echo $row['name']; echo '_';
		echo $row['phone']; echo ';_';
	}	
?>