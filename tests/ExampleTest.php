<?php

use Spark\Weight\Weight;

it('can test clearlly passed', function () {
    $pounds = Weight::killograms(100)->toPounds();
    expect($pounds)->toEqual(220.462);
});
