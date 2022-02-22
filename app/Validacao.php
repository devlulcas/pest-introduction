<?php

namespace App;

class Validacao
{
    public static function validarSenha(string $senha): bool
    {
        if (strlen($senha) < 8) {
            return false;
        }

        if ($senha === "12345678") {
            return false;
        }

        return true;
    }
}
