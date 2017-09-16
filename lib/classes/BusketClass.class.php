<?php
namespace lib\classes;

class BusketClass
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
                $this->products[$product->getId()][5] += 1;
            }
            else {
                $this->products[$product->getId()] = [$product->getPrice(), $product->getBrand(), $product->getModel(), $product->getType(), $product->getId(), 1];
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
            $this->totalPrice -= $this->products[$id][0];
            $this->totalCount -= 1;
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