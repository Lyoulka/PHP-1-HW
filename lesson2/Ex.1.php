﻿<?php
$a = mt_rand(-10,10);
$b = mt_rand(-10,10);
echo 'Значение переменной а = '.$a.',<br>Значение переменной b = '.$b.'.<br>';
if ($a >= 0 and $b >= 0 ){
	echo 'Разность = '.($a-$b);}
		elseif ($a < 0 and $b < 0 ){
			echo 'Произведение = '.($a*$b);}
				else {
					echo 'Сумма = '.($a+$b);} 
?>