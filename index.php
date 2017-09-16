<?php
require_once "autoloader.php";

use lib\classes\CarClass;
use lib\classes\TVClass;
use lib\classes\BallpointPenClass;
use lib\classes\DuckClass;
use lib\classes\OrderClass;
use lib\classes\MyException;


$carBMV = new CarClass('BMW', 'Z4',1000, 0, -777, 'white');
$carAudi = new CarClass('Audi', 'A5', 1000, 10, -777,'black');
$carAudi->start();
$carAudi->stop();

$tvSony = new TVClass('Sony', 'trinetron', 1000, 20, -123);
$tvSamsung = new TVClass('Samsung', 'PDP F4000', 5000, 20 , -124);
$tvSony->on();
$tvSony->changeChannel(5);
$tvSony->off();

$steelPen = new BallpointPenClass('Parker', "Caran d'Ache Office Paul Smith", 10000, 0, -888, 'black'  );
$plasticPen = new BallpointPenClass('Parker', "Kit Rrofessional",5000, 10, -999, 'red');
$plasticPen->setColor('blue');

$duckMandarin = new DuckClass('duck', 'Mandarin', 1000, 0, -111, 'male', 'home');
$duckGrebe = new DuckClass('duck', 'Grebe', -10000, 10,-222, 'female', 'wild' );
$duckMandarin->changeState('плывет');

$busket = new OrderClass();
echo '<p>Добавление товара 1</p>';
$busket->setProducts($duckMandarin);
$duckMandarin = new DuckClass('duck', 'Mandarin', 1000, 0, -111,'male', 'home');
echo '<p>Добавление товара 2</p>';
$busket->setProducts($duckMandarin);
echo '<p>Добавление товара 3</p>';
$busket->setProducts($duckGrebe);
echo '<p>Добавление товара 4</p>';
$busket->setProducts($plasticPen);
echo '<p>Добавление товара 5</p>';
$busket->setProducts($tvSamsung);
echo '<p>Удаление товара 5</p>';
$busket->unsetProducts(-124);

$busket->printBusket();

