<?php

use App\Algoritmos\Algoritmos;

it("é um fizz buzz válido", function () {
    $resultado = Algoritmos::fizzbuzz(inicio: 1, fim: 10);
    expect($resultado)->toMatchArray([1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "Fizz Buzz"]);
});
