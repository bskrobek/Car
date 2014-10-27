<?php

include('Car.php');
include('Engine.php');

$myEngine = new Engine();
$myEngine->setHP(4000);

$myCar = new Car();
$myCar
	->setEngine($myEngine->getHP())
	->setCapacity(7000)
;

echo "VMax: " . $myCar->getVMax() ."\n";
echo "Acceleration: " . $myCar->getAcceleration() . "\n";