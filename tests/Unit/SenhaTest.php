<?php

use App\Validacao;

use function PHPUnit\Framework\assertTrue;

test("senhas menores que oito letras não são válidas", function () {
    expect(Validacao::validarSenha("abc"))->toBe(false);
});


test("senhas óbvias não são válidas", function () {
    expect(Validacao::validarSenha("12345678"))->toBe(false);
});

test("senhas grandes são válidas", function () {
    assertTrue(Validacao::validarSenha("qwerty12345"));
});
