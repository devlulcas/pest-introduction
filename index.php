
<?php

// Carregando o autoloader
require __DIR__ . '/vendor/autoload.php';

use App\Algoritmos\Algoritmos;

$resultado = Algoritmos::fizzbuzz(1, 15);

var_dump($resultado);
