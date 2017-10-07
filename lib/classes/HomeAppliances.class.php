<?php
namespace lib\classes;
use lib\classes\package\OnOffAble;

abstract class HomeAppliances extends Product implements OnOffAble
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