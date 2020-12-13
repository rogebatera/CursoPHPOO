<?php

/*
quando você coloca
a classe como abstract, ela não pode ser
instanciada direta, você utiliza somente para extender 
outras classes.
*/
abstract class Conta{

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if($saldo > 0){
            $this->saldo = $saldo;
        }
    }

    public function depositar($quantia){
        if($quantia > 0){
            $this->saldo += $quantia;
        }
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getInfo(){
        return "Agencia: {$this->agencia}, Conta: {$this->conta}";
    }

    /*
    Quando você coloca um metodo abstract
    você força que as classes que extenderem essa
    classes são obrigados a implementar esse metodo retirar
    */
    abstract function retirar($quantia);
    

}