<?php 

function mycode($a, $b)
{
	if ( $a > $b ){
		return $a;
	} 
	else {
		return $b;
	}

	echo "<br/>"; // это не работает когда используется return
}

$first = mycode(10, 23);
$second = mycode(30, 231);
$third = mycode(1231, 1);

echo "$first, $second, $third";

// abs(x) - возрвращает абсолютное число
// round(x) - округляет число
// ceil(x) - округлят в большую сторону
// floor(x) - округляет в меньшую сторону
// rand(x, y) - случайное число от x до y
// min(x, y, ...) -  минимальное число
// max(x, y, ...) - максимальное число