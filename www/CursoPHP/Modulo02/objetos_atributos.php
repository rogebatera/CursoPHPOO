<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
}

$jose = new Funcionario;
$jose->nome = 'José';
$jose->salario = 5000;
$jose->departamento = 'Financeiro';

echo '<pre>';
print_r(get_object_vars($jose));
echo '</pre>';