<?php
require_once 'HighWay.php';


final class MotorWay extends Highway {
    
    public function __construct() {
        
        parent::__construct(4, 130);
    }

    public function addVehicle(?vehicle $vehicle){
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
        $this->setCurrentVehicles($vehicle);
        }
    }

}