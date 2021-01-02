<?php

$xml = simplexml_load_file('paises3.xml');

foreach($xml->estados->nome as $nome){
    echo "Estado: $nome <br>";
}

