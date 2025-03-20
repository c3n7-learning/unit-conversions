<?php

namespace C3n7Learning\UnitConversions;

class Weight
{
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(private float $kilograms) {}

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
