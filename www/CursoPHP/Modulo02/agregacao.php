<?php

    require_once 'classes/Produto.php';
    require_once 'classes/Cesta.php';

    $c1 = new Cesta;
    
    $p1 = new Produto('IphoneX', 10, 3000);
    $p2 = new Produto('Iphone11', 5, 4500);

    $c1->addItem($p1);
    $c1->addItem($p2);

    foreach($c1->getItens() as $item){
        echo "Item: {$item->getDescricao()} - Preco {$item->getPreco()}";
        echo "</br>";
    }

    /*
    echo '<pre>';
    print_r($c1);
    echo '</pre>';*/