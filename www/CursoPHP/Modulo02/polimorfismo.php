<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$contas = [];
$contas[] = new ContaCorrente(1342, 'CC.1234', 400, 500);
$contas[] = new ContaPoupanca(1345, 'PP.4566', 100);

foreach($contas as $conta)
{
    if($conta instanceof Conta)
    {   
        echo '<hr>'; 
        echo $conta->getInfo(). ' - ';
        echo "Saldo Atual: {$conta->getSaldo()}";
        echo " - Depositado 200 {$conta->depositar(200)}";
        echo " - Saldo Atual: {$conta->getSaldo()}";
        if($conta->retirar(700))
        {
            echo ' - Retirada de 700 - Ok';
        }else{
            echo ' - Retirada de 700 - (não permitida)';   
        }
        echo " - Saldo Atual: {$conta->getSaldo()}";
        echo '<hr>';  
    }

}

