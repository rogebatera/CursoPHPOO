<?php

$xml = simplexml_load_file('paises.xml');

echo "Nome: ".$xml->nome;
echo "<br>";
echo "Idioma: ".$xml->idioma;