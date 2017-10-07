<?php
namespace lib\classes;

class Car extends Transport
{

    public function __construct ($brand, $model, $price, $discount, $id, $color)
    {
        parent::__construct ($brand, $model, $price, $discount, 'car', $id, $color);
    }

}