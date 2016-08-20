<?php

/**
* A partir desse padrão, é possivel desacoplar a superclasse da criação de uma dependência.
* Com a criação das instâncias na subclasse, apenas elas ficaram acopladas as classes
* concretas da hierarquia. Dessa forma, caso uma nova instância da dependência precise
* ser utilizada pela superclasse, basta criar uma nova subclasse que retorne aquela instâcia.
*
**/

require "entities/Entity.php";
require "models/Product.php";
require "interfaces/DAO.php";
require "daos/ProductDAO.php";
require "services/AbstractService.php";
require "services/ProductService.php";

$productService = new ProductService();
var_dump($productService->getDAO());
