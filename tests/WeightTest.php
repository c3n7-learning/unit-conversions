<?php

use Tefabi\UnitConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(2.204623 * 100);
});

it('can convert kilograms to stones', function () {
    $pounds = Weight::kilograms(100)->toStones();

    expect($pounds)->toEqual(0.15747 * 100);
});
