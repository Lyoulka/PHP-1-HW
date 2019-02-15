<?php
$a = mt_rand(-10,10);
$b = mt_rand(-10,10);
$numb = mt_rand(1,4);

echo 'Значение переменной а = '.$a.',<br>Значение переменной b = '.$b.'.<br>';
mathOperation($a, $b, $numb);
 
	function mathOperation($arg1, $arg2, $operation){
	 
		switch ($operation){
			case 1:
				echo 'Сумма = '.($arg1+$arg2);
				break;
			case 2:				
				echo 'Разность = '.($arg1-$arg2);
				break;
			case 3:
				echo 'Произведение = '.($arg1*$arg2);
				break;
			case 4:
				if (arg2 !==0) {
					echo 'Частное = '.($arg1/$arg2);
					break;
				}
				else{
					echo 'На ноль делить нельзя';
					break;
				}
					
				
			}
	}
