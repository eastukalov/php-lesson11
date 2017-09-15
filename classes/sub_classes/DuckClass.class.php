<?php

class DuckClass extends BirdClass implements WildGetAble
{
    private $wild;

    public function __construct($brand, $model, $price, $discount, $id, $gender, $wild)
    {
        parent::__construct ($brand, $model, $price, $discount, 'bird', $id, $gender);
        $this->wild = $wild;
    }

    public function getWild()
    {
        return $this->wild;
    }

}