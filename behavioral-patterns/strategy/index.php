<?php

/**
* Definir uma família de algoritmos, encapsular cada um, e torná-los intercambiáveis.
* Estratégia permite o algoritmo variar independentemente dos clientes que o utilizam.
*
* Capturar a abstração em uma interface, encapsular os detalhes de implementação em classes derivadas.
**/

require "Budget.php";
require "TaxCalculator.php";
require "interfaces/Tax.php";
require "strategies/ICMS.php";
require "strategies/ISS.php";

$reform = new Budget(500);
$taxCalculator = new TaxCalculator();

echo $taxCalculator->calculate($reform, new ICMS());
echo "<br>";
echo $taxCalculator->calculate($reform, new ISS());
