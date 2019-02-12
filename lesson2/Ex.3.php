<?php
$a = mt_rand(-10,10);
$b = mt_rand(-10,10);
echo 'Значение переменной а = '.$a.',<br>Значение переменной b = '.$b.'.<br>';
$temp = mathOperation($a,$b);
echo $temp;
	function mathOperation($arg1, $arg2) {
	$sum = $arg1+$arg2;
	$raz = $arg1-$arg2;
	$proiz = $arg1*$arg2;
	$del = $arg1/$arg2;
	$result = 'Сумма = '.$sum.',<br>Разность = '.$raz.',<br>Произведение = '.$proiz.',<br>Частное = '.$del.'.';
	return $result;
	}
?>