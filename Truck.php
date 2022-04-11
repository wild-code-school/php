<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private int $stockCapacity;

    private int $stockLevel;

 public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->stockCapacity = $stockCapacity;
    $this->stockLevel = 0;
}

    public function setStockLevel($stockLevel): string
{
    
        if ($stockLevel === $this->stockCapacity) {
             return 'Full';
        }  return  $this->stockLevel = $stockLevel;
}

    public function getStockLevel(): int
    {

        return $this->stockLevel;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergy(string $energy): Truck
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}