<?php

use C3n7Learning\UnitConversions\Weight;

it('can convert kilograms to pounds', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();


    expect($lbs)->toBe(2.204623 * 100);
});
