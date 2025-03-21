<?php

namespace C3N7Learning\UnitConversions;

use Exception;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {}

    public function toPounds(): float
    {
        return $this->kilograms * 2.204623;
    }
}
