<?php
class Titulo{

    private $data;

    //utilizado para setar a variavel no array caso não exista
    public function __set($propriedade, $valor){
        //print $propriedade.' - '.$valor.'<br>';
        $this->data[$propriedade] = $valor;
    }

    //utilizado para buscar a variavel no array
    public function __get($propriedade){
        return $this->data[$propriedade];
    }
    
    //utilizado para verificar se existe a variavel no array
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    //utilizado para realizar unset na variavel do array
    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    //utilizado para setar uma string, quando o objeto for printado na tela
    public function __toString()
    {
        return json_encode($this->data);
    }

    public function __clone()
    {
        $this->data['nome'] = 'Fulano';
    }


}

$tit = new Titulo;

$tit->valor = 200;
$tit->nome = "Rogerio";

$tit2 = clone $tit;

echo "<pre>";
var_dump($tit);
var_dump($tit2);
echo "</pre>";




/*
if(isset($tit->valor)){
    echo "tem valor";
}
*/

//echo $tit->valor;

//unset($tit->valor);

//var_dump($tit);


