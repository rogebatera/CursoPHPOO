<?php

    require_once('classes/Produto.php');
    require_once('classes/Caracteristica.php');

    $p1 = new Produto('Iphone', 10, 3000);
    $p1->addCaracteristicas('Cor', 'Branco');
    $p1->addCaracteristicas('Peso', '500g');

    echo '<pre>';
    var_dump($p1);
    echo '</pre>';
    

    print 'Produto: '.$p1->getDescricao().'</br>';

    foreach($p1->getCaracteristica() as $caracteristica){
        $nome = $caracteristica->getNome();
        $valor = $caracteristica->getValor();
        print "Caracteristica {$nome} = {$valor} </br>";
    }