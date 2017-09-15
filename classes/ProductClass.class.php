<?php

    abstract class ProductClass implements TypeGetAble, PriceAble
    {
    private $price;
    private $discount = 0;
    private $brand;
    private $model;
    private $type;
    private $id=0;

    public function __construct ($brand, $model, $price, $discount=0, $type, $id)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->discount = $discount;
        $this->type = $type;
        $this->id = $id;
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

}