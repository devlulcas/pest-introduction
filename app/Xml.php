<?php

namespace App;

use SimpleXMLElement;
use DOMDocument;
use DOMXPath;

class Xml
{
  /**
   * Recebe a XML, pula os elementos com prefixo e retorna um array com estes elementos
   */
  public static function soapXmlToArray(string $xml): array
  {
    // Transforma as tags encodadas em seus símbolos outra vez
    $decodedXml = trim(htmlspecialchars_decode($xml));


    if (empty($decodedXml)) {
      throw new \Exception("Resposta sem conteúdo algum", 500);
    }

    // Só Deus sabe o que esse regex esta fazendo, favor não tocar
    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $xml);
    $xml = new SimpleXMLElement($response);

    // Pega o XML e passa para array, aí pega o array e passa para json e depois pega o json passa para array (???)
    $array = json_decode(json_encode((array)$xml), TRUE);

    return $array;
  }
}
