<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{


        public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

        public function switchon(): bool
    {
        if($this->currentSpeed === 10){
            return true;
        } return false;
    }

        public function switchoff(): bool
    {    
        return false;
    }

}