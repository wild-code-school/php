<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';



class Car extends Vehicle implements LightableInterface{

public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

 public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $energyLevel, bool $hasParkBrake)
{
    parent::__construct($color, $nbSeats, $nbWheels);
    $this->energy = $energy;
    $this->energyLevel = $energyLevel;
    $this->hasParkBrake = $hasParkBrake;
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

    public function getHasParkBrake():bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;

    }

    public function start():string{
        if ($this->hasParkBrake === true){
            throw new Exception("D'OH!");
        }elseif ($this->hasParkBrake === false){
           return 'You can go !';
        }
    }

    public function switchon(): bool
    {
            return true;
    }
    

    public function switchoff(): bool
    {    
        return false;
    }
}