<?php

$xml = simplexml_load_file('paises2.xml');

$xml->moeda = 'Novo Real';
$xml->geografia->clima = "temperado";

$xml->addChild('presidente', 'Lula');

echo $xml->asXML();

file_put_contents('paises2.xml', $xml->asXML());