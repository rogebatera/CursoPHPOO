<?php

class Software {

    private $id;
    private $nome;
    /*
    um atributo static ele pertence
    a Classe, ou seja, todo o objeto criado por
    essa classe constara esse atributo
    */
    public static $contador;

    public function __construct($nome)
    {
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }

    public static function getContador(){
        return self::$contador;
    }
}

$s1 = new Software('VScode');
$s2 = new Software('Docker');

print '<pre>';
print_r($s1);
print_r($s2);

/*
para acessar Metodo static public de fora
utiliza o nome da Classe e ::
*/
var_dump(Software::getContador());

print '</pre>';