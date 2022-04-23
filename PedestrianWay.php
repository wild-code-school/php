<?php
require_once 'HighWay.php';

final class PedestrianWay extends Highway {
    
    public function __construct() {
        
        parent::__construct(1, 10);
    }

    public function addVehicle(?vehicle $vehicle)
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bicycle){
            $this->setCurrentVehicles($vehicle);
        }
    }

}