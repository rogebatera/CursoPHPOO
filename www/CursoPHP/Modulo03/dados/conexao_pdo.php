<?php

$host='172.17.0.3';
$db = 'livro';
$username = 'postgres';
$password = 'postgres';
$port = 5432;

$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$username;password=$password";
try{
    // Nova conexão PDO
    $conn = new PDO($dsn);
    if($conn){
        echo "Conectou com Sucesso!";
    }

}catch (PDOException $e){
    echo $e->getMessage();
}