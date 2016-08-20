<?php

/**
* Sem violar o encapsulamento, captura e externaliza o estado interno de um objeto
* para que o objeto pode ser devolvido a este estado mais tarde.
**/

require "states/ContractType.php";
require "states/Finalized.php";
require "states/InProgress.php";
require "states/Waiting.php";
require "Contract.php";
require "State.php";
require "History.php";

$contract = new Contract(date("Y-m-d h:i:s"));
$history = new History();
echo "<pre>";
$history->addState($contract->saveState());
var_dump($contract);

$contract->next();
$history->addState($contract->saveState());
var_dump($contract);

$contract->next();
$history->addState($contract->saveState());
var_dump($contract);

var_dump($history->getState(1)->getContract());
