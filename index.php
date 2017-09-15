<?php
    require_once "autoloader.php";



	$carBMV = new CarClass('BMW', 'Z4',1000, 0, -777, 'white');
	$carAudi = new CarClass('Audi', 'A5', 1000, 10, -777,'black');
	$carAudi->start();
	$carAudi->stop();





	$tvSony = new TVClass('Sony', 'trinetron', 1000, 20, -123);
	$tvSamsung = new TVClass('Samsung', 'PDP F4000', 5000, 20 , -124);

	$tvSony->on();
	$tvSony->changeChannel(5);
	$tvSony->off();
    $s = $tvSony->getPrice();
	echo $s;





	$steelPen = new BallpointPenClass('Parker', "Caran d'Ache Office Paul Smith", 10000, 0, -888, 'black'  );
	$plasticPen = new BallpointPenClass('Parker', "Kit Rrofessional",5000, 10, -999, 'red');

	$plasticPen->setColor('blue');





	$duckMandarin = new DuckClass('duck', 'Mandarin', 1000, 0, -111, 'male', 'home');
	$duckGrebe = new DuckClass('duck', 'Grebe', 10000, 10,-222, 'female', 'wild' );
	$duckMandarin->changeState('плывет');

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
            if (isset($this->products[$product->getId()])) {
                $this->products[$product->getId()][5] += 1;
            }
            else {
                $this->products[$product->getId()] = [$product->getPrice(), $product->getBrand(), $product->getModel(), $product->getType(), $product->getId(), 1];
            }
                $this->totalPrice += $product->getPrice();
                $this->totalCount += 1;
        }

        public function unsetProducts($id) {
            $this->totalPrice -= $this->products[$id][0];
            $this->totalCount -= 1;
            unset($this->products[$id]);
        }

    }

    $busket = new BusketClass();
	$busket->setProducts($duckMandarin);
    $duckMandarin = new DuckClass('duck', 'Mandarin', 1000, 0, -111,'male', 'home');
//    echo $duckMandarin->getId();
    $busket->setProducts($duckMandarin);
    $busket->setProducts($duckGrebe);
    $busket->unsetProducts(-223);


     class OrderClass
     {
         private $products;
         public function __construct($products)
         {
             $this->products = $products;
         }

         public function printBusket ()
         {
            ?><html lang='ru'>
                <head>
                 <meta charset='UTF-8'>
                 <title>Корзина</title>
                    <style> td {padding: 0 20px 0 20px;} </style>
                </head>
            <body>
            <table>
                <thead>
                <tr>
                    <td>ИД</td>
                    <td>Тип товара</td>
                    <td>Наименование</td>
                    <td>Вид</td>
                    <td>Цена</td>
                    <td>Кол-во</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->products as $product) : ?>
                    <tr>
                        <td><?=$product[4]?></td>
                        <td><?=$product[3]?></td>
                        <td><?=$product[1]?></td>
                        <td><?=$product[2]?></td>
                        <td><?=$product[0]?></td>
                        <td><?=$product[5]?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </body>
            </html>
        <?php
         }
     }

(new OrderClass($busket->getProducts()))->printBusket();

