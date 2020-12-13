<?php

    require_once 'classes/Fabricante.php';
    require_once 'classes/Produto.php';

    $p1 = new Produto('IphoneX', 10, 7);
    $f1 = new Fabricante('Apple', 'Rua Jair Afonso', '1123');

    $p1->setFabricante($f1);

    print "O Fabricante do produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()}";

   /*echo '<pre>';
    var_dump($p1);
    var_dump($f1);
    echo '</pre>';
    */

