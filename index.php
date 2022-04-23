<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$pinkSedan = new Car('pink', 4, 4, 'fuel', 50, true);

$canyonero = new Car('red', 4, 4, 'fuel', 50, false);

$rockrider = new Bicycle('yellow', 1, 2);

$tornado = new Bicycle('black', 1, 2);

$bigDaddyTruck = new Truck('green', 4,  4, 'fuel', 75, 300);

$uncleSam = new Truck('black', 4, 4, 'fuel', 75, 250);

$tre = new Skateboard('black', 2, 2);

$flip = new Skateboard('yellow', 2, 2);

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

echo $bigDaddyTruck->forward();
echo '<br> Vitesse du camion: ' . $bigDaddyTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigDaddyTruck->brake();
echo '<br> Vitesse du camion : ' . $bigDaddyTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigDaddyTruck->setStockLevel(50) . '<br>';
echo $bigDaddyTruck->getStockLevel() . '<br>';

echo $tre->forward();
echo '<br> Vitesse du skate : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $tre->brake();
echo '<br> Vitesse du skate : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';

echo $flip->forward();
echo '<br> Vitesse du skate : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $flip->brake();
echo '<br> Vitesse du skate : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>'; 


$motorWay = new MotorWay();

$motorWay->addVehicle($pinkSedan);
$motorWay->addVehicle($bigDaddyTruck);
$motorWay->addVehicle($canyonero);
var_dump($motorWay);

$pedestrian = new PedestrianWay();

$pedestrian->addVehicle($rockrider);
$pedestrian->addVehicle($tre);
 var_dump($pedestrian);

 $residential = new ResidentialWay();

 $residential->addVehicle($pinkSedan);
 $residential->addVehicle($rockrider);
 $residential->addVehicle($bigDaddyTruck);
 $residential->addVehicle($tre);
  var_dump($residential);

    try{
      echo $pinkSedan->start();
    }catch(Exception $e){
      echo$pinkSedan->setHasParkBrake(false);
    }finally {
      "echo 'OKEY let's go!";
    }

    try{
        echo $canyonero->start();
    }catch(Exception $e){
        echo$canyonero->setHasParkBrake(false);
    }finally {
        "echo 'OKEY let's go!";
    }