<?php

class GoalKeeper extends Player {

    private int $gloveSize;

    public function __construct(string $firstName, string $lastName, int $gloveSize){
        parent::__construct($firstName, $lastName);
        $this->gloveSize = $gloveSize;
    }

    public function __toString(): string {
        return parent::__toString() . 'et je suis gardien';
    }
}