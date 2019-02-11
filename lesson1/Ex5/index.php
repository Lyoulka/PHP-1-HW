<?php
$a = 2;
$b = 1;
echo '<h4>&#8470;5</h4><p><i>Input value:</i><br> a ='.$a.';<br>b ='.$b.'.</p>';
$b += $a;
$a = $b - $a;
$b -= $a;
echo '<p><i>Output value:</i><br> a ='.$a.';<br>b ='.$b.'.</p>';
?>