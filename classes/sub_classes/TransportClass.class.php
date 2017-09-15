<?php

    abstract class TransportClass extends ProductClass  implements MoveAble
    {
        private $move = false;
        private $color;


        public function __construct ($brand, $model, $price, $discount, $type, $id, $color)
        {
            parent::__construct ($brand, $model, $price, $discount, $type, $id);
            $this->color = $color;
        }

        public function start ()
        {
            $this->move = true;
            echo '<p>Поехали</p>';
        }

        public function stop ()
        {
            $this->move = false;
            echo '<p>Остановились</p>';
        }

    }