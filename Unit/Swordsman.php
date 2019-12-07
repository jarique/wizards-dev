<?php

namespace Unit;

class Swordsman implements BaseInterface
{
    public function attackStrength(): int { return 12; }

    public function healthReserve(): int { return 67; }
}
