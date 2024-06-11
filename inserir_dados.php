<?php

include "conexao.php";

function listarClientes()
{
    $conn = conectarBanco();
    $sql = "SELECT id_cliente, nome, cpf, email FROM Cliente";
    $result = $conn->query($sql);

    $clientes = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }
    }
    $conn->close();
    return $clientes;
}

function listarDestinos()
{
    $conn = conectarBanco();
    $sql = "SELECT id_destino, nome_destino, regiao, turismo FROM Destino";
    $result = $conn->query($sql);

    $destinos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $destinos[] = $row;
        }
    }
    $conn->close();
    return $destinos;
}

function listarHoteis()
{
    $conn = conectarBanco();
    $sql = "SELECT id_hotel nome_hotel, cidade_hotel, dias_hospedagem, data_chegada, data_saida FROM Hotel";
    $result = $conn->query($sql);

    $hoteis = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hoteis[] = $row;
        }
    }
    $conn->close();
    return $hoteis;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = conectarBanco();

    if (isset($_POST['nome_cliente'])) {
        $nome = $_POST['nome_cliente'];
        $cpf = $_POST['cpf_cliente'];
        $email = $_POST['email_cliente'];

        $sql = "INSERT INTO Cliente (nome, cpf, email) VALUES ('$nome', '$cpf', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['nome_destino'])) {
        $nome_destino = $_POST['nome_destino'];
        $regiao = $_POST['regiao_destino'];
        $turismo = $_POST['turismo_destino'];

        $sql = "INSERT INTO Destino (nome_destino, regiao, turismo) VALUES ('$nome_destino', '$regiao', '$turismo')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['nome_hotel'])) {
        $nome_hotel = $_POST['nome_hotel'];
        $cidade_hotel = $_POST['cidade_hotel'];
        $dias_hospedagem = $_POST['dias_hospedagem'];
        $data_chegada = $_POST['data_chegada'];
        $data_saida = $_POST['data_saida'];

        $sql = "INSERT INTO Hotel (nome_hotel, cidade_hotel, dias_hospedagem, data_chegada, data_saida) VALUES ('$nome_hotel', '$cidade_hotel', '$dias_hospedagem', '$data_chegada', '$data_saida')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
