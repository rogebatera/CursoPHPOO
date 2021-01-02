<?php
class Cidade {

    public static function all()
    {
        $conn = new PDO("pgsql:host=172.17.0.3; port=5432; dbname=livro; user=postgres; password=postgres");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conn->query("SELECT * FROM cidade ORDER BY id");
        return $result->fetchAll();
    }

}