<?php 

/*$var2 = 1;

$var = function () use ($var2) {
	echo "Esto es una funcion anonima<br>";
	echo "value: " . $var2;
};

$var();
*/

$x = 3;
$numbers = [1, 2, 3, 4, 5];
$result = array_map(function ($n) use ($x){
return $n * $x;
}, $numbers);
var_dump($result);