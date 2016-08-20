<?php
function loadClass($className) {
    require $className.".php";
}
spl_autoload_register("loadClass");

/**
* Dada uma linguagem , define uma representação para sua gramática juntamente com
* um interpretador que usa a representação para interpretar sentenças na língua.
*
* Mapear um domínio para uma língua , a língua a uma gramática , e a gramática a
* um projeto hierárquico orientado a objetos.
**/

// 1 + 3
// (1 + 3) + (2 + 2)

$left = new Soma(new Number(1), new Number(3));
$right = new Subtraction(new Number(2), new Number(2));

$soma = new Soma($left, $right);
echo $soma->evaluate();
