<?php
namespace lib\classes;

abstract class Bird extends Product
{
    private $gender;
    private $state = 'спит';

    public function __construct($brand, $model, $price, $discount, $type, $id, $gender)
    {
        Product::__construct ($brand, $model, $price, $discount, $type, $id);
        $this->gender = $gender;
    }

    public function changeState ($state)
    {
        $this->state = $state;
        echo "<p>Утка $this->state</p>";
    }

}