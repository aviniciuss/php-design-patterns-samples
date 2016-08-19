<?php

/**
* Evite o acoplamento do remetente de um pedido para o seu receptor , dando mais
* de um objeto a chance de tratar a solicitação . Encadear os objetos receptores e
* passa a solicitação ao longo da cadeia até que um objeto lida com ele.
**/

require "Budget.php";
require "DiscountCalculator.php";
require "Item.php";

$reform = new Budget(550);
$reform->addItem(new Item("Item01", 250));
$reform->addItem(new Item("Item02", 50));
$reform->addItem(new Item("Item02", 100));
$reform->addItem(new Item("Item03", 150));

$discountCalculator = new DiscountCalculator();

echo $discountCalculator->discount($reform);
