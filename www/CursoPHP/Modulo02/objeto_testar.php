<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
    
    function setSalario(){}
    function getSalario(){}

}

$jose = new Funcionario;

if(method_exists($jose, 'setNome')){
    print 'José tem metodo setNome() <br>';
}

if(method_exists($jose, 'setSalario')){
    print 'José tem metodo setSalario() <br>';
}