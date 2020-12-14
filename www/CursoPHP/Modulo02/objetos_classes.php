<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
}

class Estagio extends Funcionario{
    public $bolsa;
}

$joao = new Funcionario;
$jose = new Estagio;

print get_class($joao); //funcao para buscar a classe do objeto
echo '<hr>';
print get_class($jose);
echo '<hr>';
print get_parent_class($jose); //funcao que tras o nome da classe Pai do objeto
echo '<hr>';
print get_parent_class('Estagio'); //passando o nome da classe
echo '<hr>';
var_dump(is_subclass_of($jose, 'Funcionario')); //função verifica se o objeto Jose é filho da classe Funcionario
