<?php
namespace lib\classes;

class CarClass extends TransportClass
{

    public function __construct ($brand, $model, $price, $discount, $id, $color)
    {
        parent::__construct ($brand, $model, $price, $discount, 'car', $id, $color);
    }

}