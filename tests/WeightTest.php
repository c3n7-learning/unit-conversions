<?php

use C3N7Learning\UnitConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(2.204623 * 100);
});
