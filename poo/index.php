<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car,Truck};

echo "class car <br>";
$car = new Car('david');
$car->move();

echo "<br>class truck<br>";
$truck = new Truck('jassiel', 'pickup');
$truck->move();

echo "<br>class truck 2<br>";
$truck2 = new Truck('jassiel', 'pickup');
$truck2->move();


echo "<br>Total truck: " . Truck::getTotal();
 ?>