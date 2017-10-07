<?php
namespace lib\classes;
use lib\classes\package\TypeGetAble, lib\classes\package\PriceAble, lib\classes\package\CountAble, lib\classes\package\CountChangeAble;

abstract class Product implements TypeGetAble, PriceAble, CountAble, CountChangeAble
{
    private $price;
    private $discount = 0;
    private $brand;
    private $model;
    private $type;
    private $id = 0;
    private $count = 0;

    public function __construct ($brand, $model, $price, $discount=0, $type, $id)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->discount = $discount;
        $this->type = $type;
        $this->id = $id;
        $this->count = 1;
    }

    public function setPrice ($price, $discount=0)
    {
        if ($price) {
            $this->price = $discount ? ($price - $price * $discount / 100) : $price;
            echo "Новая цена: $this->price";
        }
    }

    public function getPrice ()
    {
        if ($this->price) {
            $currPrice = $this->discount ? ($this->price - $this->price * $this->discount / 100) : $this->price;
            return $currPrice;
        };

        return 0;

    }

    public function getType()
    {
        return $this->type;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getId()
    {
        return $this->id;
    }

    public function incCount()
    {
        $this->count++;
    }

    public function decCount()
    {
        $this->count--;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

}