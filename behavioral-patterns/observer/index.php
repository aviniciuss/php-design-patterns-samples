<?php

date_default_timezone_set("Brazil/East");

/**
* Definir uma dependência um-para-muitos entre objetos, de modo que quando um 
* objeto muda de estado, todos os seus dependentes são notificados e atualizados automaticamente.
**/

require "Item.php";
require "NF.php";
require "interfaces/ActionsNF.php";
require "observers/Printer.php";
require "NFBuilder.php";

$nfb = new NFBuilder();
$nfb->withCompany("Robot Systems");
$nfb->withCnpj("134588456");
$nfb->addItem(new Item("Item 01", 50));
$nfb->addItem(new Item("Item 02", 150));
$nfb->addItem(new Item("Item 03", 80));
$nfb->withObservations("hello");
$nfb->onDate(date("Y-m-d h:i:s"));

$nfb->addObserver(new Printer());

echo "<pre>";
var_dump($nfb->build());
