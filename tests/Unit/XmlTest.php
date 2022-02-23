<?php

use App\Xml;
use App\Dummy\Receita;

test("transforma xml em array associativo", function () {
  $array = Receita::$falsaReceitaEmArray;
  $xml = file_get_contents(__DIR__ . "/../DummyData/Receita.xml");

  $arrayConversion = Xml::soapXmlToArray($xml);

  // O array que queremos deve ser filho temreceita
  $arrayConversionFinal = $arrayConversion["soapenvBody"]["temCOM_RECEITA"]["temreceita"];

  expect($arrayConversionFinal)->toBeArray();
  expect($arrayConversionFinal)->toBe($array);
});
