![PHP](https://img.shields.io/static/v1?label=PHP&labelColor=3142FF&message=%20puro&color=838CF4&logo=php&logoColor=FFFFFF&style=for-the-badge) ![php unit](https://img.shields.io/static/v1?label=PHP&labelColor=057E62&message=unit&color=4CFF98&logo=php&logoColor=FFFFFF&style=for-the-badge) ![pest](https://img.shields.io/static/v1?label=PHP&labelColor=7A18B1&message=%20pest&color=E44CFF&logo=php&logoColor=FFFFFF&style=for-the-badge)

# 🧪 UNIT TESTS - TESTES UNITÁRIOS

É uma boa dar uma olhada na documentação:
[Documentação do Pest](https://pestphp.com/)

## Alguns sites, vídeos e repositórios úteis:

- [Vídeo do Dias de Dev](https://www.youtube.com/watch?v=1oTRpTPEyX0&ab_channel=DiasdeDev)

## Prepare seu ambiente de testes

Neste caso escolhi o framework de testes `Pest` por ser capaz de rodar testes do `PHP Unit` além de ter a própria API de testes que oferece uma experiência de desenvolvimento mais agradável.

> É válido lembrar que os testes rodaram apenas em ambiente de desenvolvimento.

```bash
# Instalando o pest e iniciando
composer require pestphp/pest --dev --with-all-dependencies
./vendor/bin/pest --init
```

```bash
# Cria uma pasta para seus testes unitários
mkidr tests/Unit
```

```bash
# Roda os testes
./vendor/bin/pest
```

## Nomes dos teste no Pest

> No pest é necessário colocarmos um sufixo no nome dos nossos arquivos de testes. O sufixo será aquele definido no arquivo phpunit.xml. Por padrão o sufixo é Test.php.

```
|tests
   |
   ---|Unit
        |
        ----|TremTest.php
```

## Convenções de nomes de testes no PHPUnit

> Quando vamos testar uma classe o padrão para definir o nome do teste é a combinação do nome da classe com a palavra "Test". Não precisamos nos preocupar tanto com isso no momento pois vamos estar usando o pest.

```php
// Classe
class XmlConverter {

}

// Teste
class XmlConverterTest extends PHPUnit\Framework\TestCase {

}
```

## Estrutura dos testes no Pest

> No Pest podemos usar duas funções principais para definir um test:

```php
test('garante que true é igual a true', function () {
    $this->assertTrue(true);
    expect(true)->toBeTrue();
});

it('garante que true é igual a true', function () {
    $this->assertTrue(true);
    expect(true)->toBeTrue();
});
```

Basicamente a estrutura é composta pela chamada da função `test()` ou `it()` passando como parâmetro a mensagem do teste e a função que rodará o teste, essa função estende por padrão as funcionalidades da classe `TestCase`. A única diferença entre as duas é que quando usamos `it()` ele mostra a mensagem de teste com um "it" antes.
