<?php

namespace Spark\Weight;

class Weight
{



    /**
     * Create a new instance of the Weight class.
     *
     * @param  float  $kilograms
     * @return static
     */
    public static function killograms(float $kilograms)
    {
                        $mainArray = array(1,2 ,3,4,5,6,7,8,9,10);
        return new static($kilograms);
    }

                    public function __construct(protected float $kilograms) {}

    public function toPounds()
    {
        return $this->kilograms * 2.2047;
    }
}
