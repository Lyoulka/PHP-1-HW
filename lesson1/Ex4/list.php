<?php
 $pdo = new PDO('mysql:host=localhost;dbname=id8478836_api', 'id8478836_lyoulka', 'Parol68072825');
	$stmt = $pdo->prepare('SELECT * FROM authors');
	$stmt->execute();
	foreach ($stmt as $row) {
	    echo $row['id']; echo '_';
		echo $row['name']; echo '_';
		echo $row['phone']; echo ';_';
	}
	
?>