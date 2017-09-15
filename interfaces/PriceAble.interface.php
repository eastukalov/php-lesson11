<?php

interface  PriceAble
{
    public function setPrice ($price, $discount=0);
    public function getPrice ();
}