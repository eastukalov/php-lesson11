<?php
namespace lib\classes;


class OrderClass extends BusketClass
{
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
        <?php foreach ($this->getProducts() as $product) : ?>
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
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td>Всего</td>
                <td><?=$this->getTotalPrice()?></td>
                <td><?=$this->getTotalCount()?></td>
            </tr>
        </tfoot>
    </table>
    </body>
        </html>
        <?php
    }
}