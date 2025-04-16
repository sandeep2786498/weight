<?php

namespace Spark\Weight;

class Weight {


    public static function killograms(float $kilograms)
    {
        return new static($kilograms);
    }


    public function __construct(protected float $kilograms)
    {

    }


    public function toPounds()
    {
        return $this->kilograms * 2.2046;  
    }
}
