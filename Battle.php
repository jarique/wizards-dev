<?php

class Battle
{
    public static function execute(float $firstArmyForce, float $secondArmyForce): void
    {
        if ($firstArmyForce > $secondArmyForce) {
            echo 'First army wins!';
        } elseif ($firstArmyForce < $secondArmyForce) {
            echo 'Second army wins!';
        } else {
            echo 'Draw in battle!';
        }
    }
}
