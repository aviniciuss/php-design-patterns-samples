<?php
function loadClass($className) {
    require $className.".php";
}
spl_autoload_register("loadClass");

/**
* Representam uma operação a ser realizada sobre os elementos de uma estrutura de objecto .
* Visitor permite que você defina uma nova operação sem alterar as classes dos elementos sobre os quais opera.
**/

$printer = new Printer();
$left = new Sum(new Number(1), new Number(3));
$right = new Subtraction(new Number(2), new Number(2));

$sum = new Sum($left, $right);
$sum->accept($printer);
echo ' = ' . $sum->evaluate();
