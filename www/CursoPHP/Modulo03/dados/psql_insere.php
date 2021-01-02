<?php
$conn = pg_connect('host=172.17.0.2 port=5432 dbname=livro user=postgres password=postgres');

pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Rogerio Lucio') ");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (2, 'Dayane Souza') ");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Mirella Lucio') ");

pg_close($conn);
//echo extension_loaded('pgsql') ? 'yes':'no';
