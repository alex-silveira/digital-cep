<?php

    require_once "vendor/autoload.php";

    use asa\DigitalCep\Search;

    $busca = new Search();

    $resultado = $busca->getAdressFromZipCode('01001000');

    print_r($resultado);
