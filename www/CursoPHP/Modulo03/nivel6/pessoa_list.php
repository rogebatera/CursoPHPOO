<?php
require_once('classes/Pessoa.php');

try{

    if(!empty($_GET['action']) and ($_GET['action'] == 'delete')){
        $id = (int) $_GET['id'];
        Pessoa::delete($id);
    }

    $pessoas = Pessoa::all();

}catch(Exception $e){
    print $e->getMessage();
}


$items = '';

if($pessoas){
    foreach($pessoas as $pessoa){
        $items .= '<span>'.$pessoa['nome'].'</span>';
    }
}

echo $items;