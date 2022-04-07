<?php

class player
{

    private string $firstName;
    private string $lastName;
    private int $number;
    private string $position;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString(): string { 
        return "bonjour je m'apelle $this->firstName $this->lastName";
    }

}