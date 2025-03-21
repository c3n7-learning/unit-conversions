<?php

namespace Tefabi\UnitConversions;

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

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }

    public function toCalories(): float
    {
        return $this->kilograms * 7716.179176;
    }
}
