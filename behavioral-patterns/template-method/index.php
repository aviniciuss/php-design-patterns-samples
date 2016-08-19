<?php

/**
* Define o esqueleto de um algoritmo em uma operação , adiando alguns passos para
* subclasses cliente. Template Method permite que subclasses redefinem determinadas
* etapas de um algoritmo sem alterar a estrutura do algoritmo.
*
**/

require "Budget.php";
require "TaxCalculator.php";
require "interfaces/Tax.php";
require "template/TaxConditional.php";
require "strategies/ICMS.php";
require "strategies/ISS.php";

$reform = new Budget(500);
$taxCalculator = new TaxCalculator();

echo $taxCalculator->calculate($reform, new ICMS());
echo "<br>";
echo $taxCalculator->calculate($reform, new ISS());
