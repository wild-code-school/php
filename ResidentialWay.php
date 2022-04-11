<?php
require_once 'HighWay.php';

final class ResidentialWay extends Highway {
    
    public function __construct() {
        
        parent::__construct(2, 50);
    }

}