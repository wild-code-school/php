<?php
require_once 'Vehicle.php';
require_once 'Car.php';

abstract class HighWay {
    public array $currentVehicle;
    public int $nbLanes;
    public int $maxSpeed;
 

    public function __construct(int $nbLanes, int $maxSpeed) {

        $this->nbLanes = $nbLanes;
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicle(?Vehicle $vehicle);
    /* ceci est une fonction qui sera obligatoirement definit par les enfants,
     car elle sera differente pour chaque enfant,
     celle ci ne doit pas etre definit ici, c'est une signature de function*/
    
    //-----------------------------------------------------------


    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    //-----------------------------------------------------------

    public function getNbLanes()
    {
        return $this->nbLanes;
    }


    public function setNbLanes($nbLanes)
    {
        $this->nbLanes = $nbLanes;

        return $this;
    }

    //-----------------------------------------------------------

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }


    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;
    } 

    //-----------------------------------------------------------


    public function getVehicule()
    {
        return $this->vehicule;
    }

    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }
}