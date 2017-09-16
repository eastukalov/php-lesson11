<?php
namespace lib\classes;
use OnOffAble;

abstract class HomeAppliancesClass extends ProductClass implements OnOffAble
{
    private $onOff = false;

    public function on ()
    {
        $this->onOff = true;
        echo '<p>Включен</p>';
    }

    public function off ()
    {
        $this->onOff = false;
        echo '<p>Выключен</p>';
    }

    public function getOnOff()
    {
        return $this->onOff;
    }

}