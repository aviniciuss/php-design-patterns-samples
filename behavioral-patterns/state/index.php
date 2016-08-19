<?php

/**
* Permite que um objeto altere seu comportamento quando seu estado interno muda.
**/

require "Budget.php";
require "TaxCalculator.php";
require "interface/Tax.php";
require "interface/State.php";
require "strategies/ICMS.php";
require "strategies/ISS.php";
require "states/Approved.php";
require "states/Disapproved.php";
require "states/UnderApproval.php";

$reform = new Budget(500);
$reform->approve();
$reform->discountApply();

$taxCalculator = new TaxCalculator();

echo $taxCalculator->calculate($reform, new ICMS());
echo "<br>";
echo $taxCalculator->calculate($reform, new ISS());
