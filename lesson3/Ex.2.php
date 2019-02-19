<?php
echo "0 - это ноль. <br>";
$i = 0;
do {
    $i++;
        if ($i%2 !== 0){
        echo "$i - нечетное число. <br>";
        continue;
    }
    echo "$i - четное число. <br>";

} while ($i <10);