<?php

require_once 'Vehicle.php';



class Car extends Vehicle
{

public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
    ];

    private string $energy;

    private int $energyLevel;

 public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $energyLevel)
{
    parent::__construct($color, $nbSeats, $nbWheels);
    $this->energy = $energy;
    $this->energyLevel = $energyLevel;
}
    public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergy(string $energy): Car
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