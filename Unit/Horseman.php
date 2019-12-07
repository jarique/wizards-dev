<?php

namespace Unit;

class Horseman implements BaseInterface
{
    public function attackStrength(): int { return 55; }

    public function healthReserve(): int { return 80; }
}
