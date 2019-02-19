<?php
$dir = 'img/';
	$images = scandir($dir);
	$number = count($images);
		for ($i = 0; $i < $number; $i++) {
			if ($images[$i] != '.' && $images[$i] != '..') {
			echo '<a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 200px;"></a>';
  }
}