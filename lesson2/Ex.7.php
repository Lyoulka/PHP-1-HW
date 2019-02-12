<?php
$date_time_array = getdate( time() );
$h=$date_time_array['hours'];
$m=$date_time_array['minutes'];
clock($h, $m);
function clock ($h, $m){
	if (($h >= 2 and $h <=4) or ($h >= 22 and $h <=24)){
		$h1 = $h.' часа ';
	}
	elseif (($h == 0) or ($h >=5 and $h <= 20)){
		$h1 = $h.' часов ';
	}
	else {
		$h1 = $h.' часа ';	
	}
	if ($m == 0){
		$m1 = ' ровно';
	}
	elseif (($m == 14) or (($m % 5) >=0 and ($m % 5) <4)) {
		$m1 = $m.' минут';
	}
	elseif (($m % 10) == 1) {
		$m1 = $m.' минута';
	}
	else {
		$m1 = $m.' минуты';
	}
	echo $h1, $m1;
}
?>