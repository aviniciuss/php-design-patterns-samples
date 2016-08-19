<?php

date_default_timezone_set("Brazil/East");

/**
* Separa-se a construção de um objeto complexo da sua representação, para que o
* mesmo processo de construção pode criar representações diferentes.
**/

require "Item.php";
require "NF.php";
require "NFBuilder.php";

$nfb = new NFBuilder();
$nfb->withCompany("SEUSOFT Systems");
$nfb->withCnpj("134588456");
$nfb->addItem(new Item("Item 01", 50));
$nfb->addItem(new Item("Item 02", 150));
$nfb->addItem(new Item("Item 03", 80));
$nfb->withObservations("hello");
$nfb->onDate(date("Y-m-d h:i:s"));

echo "<pre>";
var_dump($nfb->build());
