<?php

class Pessoa {

    private $genero;
    private $nome;
    const GENEROS = ['M' => 'Masculino', 'F' => 'Feminino'];

    public function __construct($nome, $genero)
    {
        $this->genero = $genero;
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    /*
    para acessar utilizar a constante
    dentro da propria classe utiliza o self::
    */
    public function getNomeGenero(){
        return self::GENEROS[$this->genero];
    }

}

$p1 = new Pessoa('Maria Silva', 'F');
$p2 = new Pessoa('Joãp Roberto', 'M');

print $p1->getNome();
echo ' - ';
print $p1->getNomeGenero();
echo ' - ';

/*
para acessar algumas constante
da classe fora, nome da classe e ::
*/
//print Pessoa::GENEROS['F'];