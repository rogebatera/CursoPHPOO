<?php
class Orcamento
{
    private $itens;

    public function adiciona(OrcavelInteface $produto, $qtde)
    {
        $this->itens[] = [$qtde, $produto];
    }

    public function calculaTotal()
    {
        $total = 0;
        foreach($this->itens as $item)
        {
            $total += ($item[0] * $item[1]->getPreco());
        }
        return $total;
    }
}