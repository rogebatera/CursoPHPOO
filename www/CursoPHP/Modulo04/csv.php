<?php

require_once 'classes/CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');

try{
    $csv->parse();
    echo '<pre>';
    var_dump($csv->fetch());
    var_dump($csv->fetch());
    echo '</pre>';
}catch(Exception $e){
    print $e->getMessage();
}


