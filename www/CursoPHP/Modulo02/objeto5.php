<?php

    class Produto{

        private $descricao;
        private $estoque;
        private $preco;

        public function __construct($descricao, $estoque, $preco)
        {
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
        }

        public function setDescricao($descricao){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setEstoque($estoque){
            if(is_numeric($estoque) and $estoque >= 0){
                $this->estoque = $estoque;
            }
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function setPreco($preco){
            if(is_numeric($preco) and $preco >= 0){
                $this->preco = $preco;
            }
        }

        public function getPreco(){
            return $this->preco;
        }

        public function __destruct()
        {
            echo "<br/>Destruido: Objeto {$this->getDescricao()}";
        }

    }

    $p1 = new Produto('Chocolate', 10, 5);

    echo $p1->getPreco();