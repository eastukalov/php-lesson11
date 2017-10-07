<?php
namespace lib\classes;

class Busket
{
    private $totalPrice = 0;
    private $totalCount = 0;
    private $products = [];

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($product)
    {
        try {

            if (is_null($product->getPrice()) || !is_numeric($product->getPrice()) || $product->getPrice() <= 0) {
                throw new \Exception('Неправильная цена для добавления в корзину');
            }

            if (isset($this->products[$product->getId()])) {
                $this->products[$product->getId()]->incCount();
            }
            else {
                $this->products[$product->getId()] = $product;
            }
            $this->totalPrice += $product->getPrice();
            $this->totalCount += 1;
        }
        catch (\Exception $e){
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }

    public function unsetProducts($id) {
        if (isset($this->products[$id])) {
            $this->totalPrice -= $this->products[$id]->getPrice();
            $this->totalCount -= $this->products[$id]->getCount();
            $this->products[$id]->setCount(0);
            unset($this->products[$id]);
        }
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getTotalCount()
    {
        return $this->totalCount;
    }

}