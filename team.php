<?php

class Team {

    private string $name;
    public array $players = [];
    

    public function addPlayer(player $player):void {
        $this->players[] = $player;

    }
}