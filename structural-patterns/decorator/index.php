<?php

/**
* Anexar responsabilidades adicionais a um objeto dinamicamente. Decoradores
* fornecem uma alternativa flexível para subclassificação para estender a funcionalidade.
**/

require "Budget.php";
require "TaxCalculator.php";
require "decorate/Tax.php";
require "template/TaxConditional.php";
require "strategies/ICMS.php";
require "strategies/ISS.php";

$reform = new Budget(500);
$taxCalculator = new TaxCalculator();

echo $taxCalculator->calculate($reform, new ICMS());
echo "<br>";
echo $taxCalculator->calculate($reform, new ISS(new ICMS()));
