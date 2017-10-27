<?php  

function hello($name) {
	echo "Hello " . $name;
	echo '<br>';
}

hello("Maria");
hello("jesus");


function sum($a, $b) {
	return $a +$b;
}

$c = sum(12, 10);
var_dump($c);
?>