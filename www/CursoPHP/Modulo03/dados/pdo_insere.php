<?php

try{

    $conn = new PDO('pgsql:host=172.17.0.3; port=5432;dbname=livro;user=postgres;password=postgres'); 

    //$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1 'Rogério')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Maria')");
    //$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Marcos')");

    $conn = null;

}catch(PDOException $e){
    print $e->getMessage();
}