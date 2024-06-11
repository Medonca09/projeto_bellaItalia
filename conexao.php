<?php

function conectarBanco()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'projetobellaitalia';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}
