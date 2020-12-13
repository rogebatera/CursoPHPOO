<?php

/*
Quando você colocar a classe como final,
ela não pode ser extendida
*/
final class ContaPoupanca extends Conta
{

    public function retirar($quantia)
    {
        if($this->saldo >= $quantia)
        {
            $this->saldo -= $quantia;
        }else{
            return false;
        }
        return true;
    }

}