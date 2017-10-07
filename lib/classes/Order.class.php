<?php
namespace lib\classes;


class Order extends Busket
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
                <td><?=$product->getId()?></td>
                <td><?=$product->getType()?></td>
                <td><?=$product->getBrand()?></td>
                <td><?=$product->getModel()?></td>
                <td><?=$product->getPrice()?></td>
                <td><?=$product->getCount()?></td>
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