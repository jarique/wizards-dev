<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/Autoloader.php';
Autoloader::register();

$firstArmy = new Army();
$firstArmy->addUnit(new \Unit\Spearman());
$firstArmy->addUnit(new \Unit\Spearman());
$firstArmy->addUnit(new \Unit\Horseman());

$secondArmy = new Army();
$secondArmy->addUnit(new \Unit\Swordsman());
$secondArmy->addUnit(new \Unit\Swordsman());
$secondArmy->addUnit(new \Unit\Horseman());

$firstArmyForce = round($firstArmy->attackStrength() / $firstArmy->healthReserve(), 2);
$secondArmyForce = round($secondArmy->attackStrength() / $secondArmy->healthReserve(), 2);

Battle::execute($firstArmyForce, $secondArmyForce);
