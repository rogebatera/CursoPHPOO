<?php

function apresenta($nome){
    print "Olá $nome";
}

$funcao = 'apresenta';

call_user_func($funcao, 'ROGÉRIO Lucio'); //funcao utilizada para executar a funcao

class Pessoa
{
    public static function apresenta($nome)
    {
        print "Olá $nome";
    }
}

$classe = 'Pessoa';
$metodo = 'apresenta';

echo '<br>';

call_user_func([$classe, $metodo], 'Dayane'); //funcao executa a classe

echo '<br>';

$obj = new Pessoa;
call_user_func([$obj, $metodo], 'Dayane'); 