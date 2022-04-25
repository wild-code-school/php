<?php

interface LightableInterface{
   public function switchon(): bool;
   public function switchoff(): bool;
}