<?php
$a=mt_rand(-10,10);
$b=mt_rand(-10,10);
echo 'Значение переменной а = '.$a.',<br>Значение переменной b = '.$b.'.<br>';
$e=1;
echo $a.' в степени '.$b.' = '.power($a,$b);
	function power ($val, $pow){
		if($pow == 0){
			echo '<br>КОНЕЦ!<br>';
			return 1;
		}
		if($pow < 0){
			return power( 1/$val, -$pow);
		}
		global $e;
		$e*=$val;
		echo $e.'<br>';
		return $val * power($val, $pow-1);
	}
?>