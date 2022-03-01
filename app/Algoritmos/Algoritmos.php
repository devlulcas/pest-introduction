<?php

namespace App\Algoritmos;

class Algoritmos
{
    public static function fizzbuzz(int $inicio, int $fim)
    {
        $result = [];

        for ($count = $inicio; $count <= $fim; $count++) {

            if (!($count % 15)) {
                $result[] = "Fizz Buzz";
            } else if (!($count % 5)) {
                $result[] = "Buzz";
            } else if (!($count % 3)) {
                $result[] = "Fizz";
            } else {
                $result[] = $count;
            }
        }
        return $result;
    }
}
