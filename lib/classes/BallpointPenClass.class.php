<?php

namespace lib\classes;
use ColorSetAble;

class BallpointPenClass extends WritingInstruments implements ColorSetAble
{
    private $color;

    public function __construct($brand, $model, $price, $discount, $id, $color)
    {
        ProductClass::__construct ($brand, $model, $price, $discount, 'BallpointPen', $id );
        $this->color = $color;
    }

    public function setColor ($color)
    {
        $this->color = $color;
        echo "<p>Стержень заменен на $this->color цвет</p>";
    }

}