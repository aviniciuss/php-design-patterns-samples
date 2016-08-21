<?php
function loadClass($className)
{
    require $className.".php";
}
spl_autoload_register("loadClass");

/**
* Convert the interface of a class into another interface clients expect.
* Adapter lets classes work together that couldn't otherwise because of incompatible interfaces.
**/

$database = new Database();
$database->setConnectionAdapter(new ConnectionMYSQL());
$database->getConnection();

$database->setConnectionAdapter(new ConnectionPGSQL());
$database->getConnection();
