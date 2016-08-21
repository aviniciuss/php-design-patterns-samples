<?php

/**
* Pattern usa para criar fachadas, expor uma API de um determinado dominio.
* Pode levar a criar classes muito grande e com regra de negócio nela.
**/

require "CompanyFacade.php";

$facade = new CompanyFacade();
