<?php
namespace lib\classes;

class TVClass extends HomeAppliancesClass
{
    private $channel;


    public function __construct($brand, $model, $price, $discount, $id)
    {
        ProductClass::__construct ($brand, $model, $price, $discount, 'TV', $id);
    }

    public function changeChannel ($channel) {

        if ($this->getOnOff()) {
            $this->channel = $channel;
            echo "<p>Канал: $this->channel</p>";
        }
    }

}