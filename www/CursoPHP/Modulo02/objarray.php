<?php

    $produto = [];
    $produto['descricao'] = 'Chocolate';
    $produto['preco'] = 10;
    $produto['estoque'] = 7;

    echo '<pre>';
    print_r($produto);
    echo '</pre>';


    $objeto = new stdClass;

    foreach($produto as $chave => $valor)
    {
        $objeto->$chave = $valor;
        //echo '<br/>';
    }

    echo '<pre>';
    print_r($objeto);
    echo '</pre>';