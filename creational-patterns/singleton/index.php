<?php
/**
* Certifique-se de uma classe tem apenas uma instância e fornecer um ponto global de acesso a ele.
**/

require "Connection.php";

$con = Connection::getInstance();
$con = Connection::getInstance();

echo $con === $con;
