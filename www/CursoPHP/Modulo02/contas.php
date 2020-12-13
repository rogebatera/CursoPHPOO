<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$c01 = new ContaPoupanca('2334', '1234-4', 500);
echo 'Saldo Inicial: '.$c01->getSaldo().'<br>';

$c01->depositar(200);
echo 'Saldo Final: '.$c01->getSaldo().'<br>';

$c01->retirar(100);
echo 'Saldo Retirado: '.$c01->getSaldo().'<br>';

/*
echo '<pre>';
echo print_r($c01);
echo '</pre>';
*/