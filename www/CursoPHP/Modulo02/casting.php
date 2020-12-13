<?php

    $produto = new stdClass;

    $produto->descricao = 'Chocolate';
    $produto->estoque = 10;
    $produto->preco = 100;

    $vetor1 = (array) $produto;

    $vetor2 = [
        'descricao' => 'Café',
        'estoque' => 10,
        'preco' => 30
    ];

    $produto2 = (object) $vetor2;

    //var_dump($produto2);

    //echo $produto2->descricao;

    //echo '<br/>';

    foreach($produto2 as $p => $value){
        echo $p;
        echo '<br/>';
    }
