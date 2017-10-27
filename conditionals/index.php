<?php 

//condiciones si o no
/*
$color = 'white';

if($color == 'red') {
	echo "the color is red";
} elseif($color == 'white') {
	echo "color is white";
} else {
	echo "the color is not red, white";
}
*/

// trabajar por casos
$color = 'red';

switch($color) {
	case 'blue':
		echo 'Color is blue';
		break;
	case 'red':
		echo 'Color is red';
		break;
default:
	echo 'Other';
}

 ?>
