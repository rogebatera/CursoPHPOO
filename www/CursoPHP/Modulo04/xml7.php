<?php

$xml = simplexml_load_file('paises4.xml');

foreach($xml->estados->estado as $estado){
    echo "Estado: ".$estado['nome']. " - Capital: ".$estado['capital'];
    echo "<br>";
}

