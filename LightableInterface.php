<?php

interface LightableInterface{
   public function switchon(bool $valueOn): bool;
   public function switchoff( bool $valueOff): bool;
}