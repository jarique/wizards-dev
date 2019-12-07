<?php

use Unit\BaseInterface;

class Army
{
    /** @var BaseInterface[] */
    private $units = [];

    public function addUnit(BaseInterface $unit): void
    {
        array_push($this->units, $unit);
    }

    public function attackStrength(): int
    {
        $result = 0;
        /** @var BaseInterface $unit */
        foreach ($this->units as $unit) {
            $result += $unit->attackStrength();
        }
        return $result;
    }

    public function healthReserve(): int
    {
        $result = 0;
        /** @var BaseInterface $unit */
        foreach ($this->units as $unit) {
            $result += $unit->healthReserve();
        }
        return $result;
    }
}
