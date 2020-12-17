<?php
require_once 'classes/Orcavelinterface.php';
require_once 'classes/Produto2.php';
require_once 'classes/Orcamento.php';
require_once 'classes/Servico.php';

$orc = new Orcamento;
$orc->adiciona(new Produto2('IphoneX', 10, 20.5), 1);
$orc->adiciona(new Produto2('Samsung S10', 6, 10), 1);
$orc->adiciona(new Produto2('Motorola', 5, 10), 1);

$orc->adiciona(new Servico('Samsung S10', 10), 1);
$orc->adiciona(new Servico('Motorola', 10), 1);

print $orc->calculaTotal();
