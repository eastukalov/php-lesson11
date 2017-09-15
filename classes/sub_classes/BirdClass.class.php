<?php

abstract class BirdClass extends ProductClass
{
    private $gender;
    private $state = 'спит';

    public function __construct($brand, $model, $price, $discount, $type, $id, $gender)
    {
        ProductClass::__construct ($brand, $model, $price, $discount, $type, $id);
        $this->gender = $gender;
    }

    public function changeState ($state)
    {
        $this->state = $state;
        echo "<p>Утка $this->state</p>";
    }

}