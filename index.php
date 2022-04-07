<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$pinkSedan = new Car('pink', 4, 'fuel');

$canyonero = new Car('red', 4, 'fuel');

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');


echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';

echo $rockrider->forward();;
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';

echo $canyonero->forward();
echo '<br> Vitesse de la voiture : ' . $canyonero->getCurrentSpeed() . ' km/h' . '<br>';
echo $canyonero->brake();
echo '<br> Vitesse de la voiture : ' . $canyonero->getCurrentSpeed() . ' km/h' . '<br>';

echo $pinkSedan->forward();
echo '<br> Vitesse de la voiture : ' . $pinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $pinkSedan->brake();
echo '<br> Vitesse de la voiture : ' . $pinkSedan->getCurrentSpeed() . ' km/h' . '<br>';