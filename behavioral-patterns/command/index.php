<?php

/**
* Encapsular uma solicitação como um objeto, desse modo parametrizar clientes
* com solicitações diferentes.
**/

require "interfaces/Command.php";
require "interfaces/State.php";
require "commands/PayCommand.php";
require "commands/Queue.php";
require "states/Created.php";
require "states/Finalized.php";
require "states/Paid.php";
require "Order.php";

$order01 = new Order("order01", 200);
echo "<pre>";
var_dump($order01);

$queue = new Queue();
$queue->push(new PayCommand($order01));
$queue->process();

var_dump($order01);
