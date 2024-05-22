<?php
function conectarBanco() {
    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'bellaItalia';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}

function listarClientes() {
    $conn = conectarBanco();
    $sql = "SELECT id_cliente, nome, cpf, email FROM Cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_cliente"]."</td><td>".$row["nome"]."</td><td>".$row["cpf"]."</td><td>".$row["email"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum cliente encontrado</td></tr>";
    }
    $conn->close();
}

function listarDestinos() {
    $conn = conectarBanco();
    $sql = "SELECT id_destino, nome_destino, regiao, turismo FROM Destino";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_destino"]."</td><td>".$row["nome_destino"]."</td><td>".$row["regiao"]."</td><td>".$row["turismo"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum destino encontrado</td></tr>";
    }
    $conn->close();
}

function listarHoteis() {
    $conn = conectarBanco();
    $sql = "SELECT nome_hotel, cidade_hotel, dias_hospedagem, data_chegada, data_saida FROM Hotel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["nome_hotel"]."</td><td>".$row["cidade_hotel"]."</td><td>".$row["dias_hospedagem"]."</td><td>".$row["data_chegada"]."</td><td>".$row["data_saida"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum hotel encontrado</td></tr>";
    }
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = conectarBanco();

    if (isset($_POST['nome_cliente'])) {
        $nome = $_POST['nome_cliente'];
        $cpf = $_POST['cpf_cliente'];
        $email = $_POST['email_cliente'];

        $sql = "INSERT INTO Cliente (nome, cpf, email) VALUES ('$nome', '$cpf', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Novo cliente cadastrado com sucesso!";
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
            echo "Novo destino cadastrado com sucesso!";
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
            echo "Novo hotel cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Dados</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Histórico de Clientes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
        </tr>
        <?php listarClientes(); ?>
    </table>

    <h1>Histórico de Destinos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Região</th>
            <th>Turismo</th>
        </tr>
        <?php listarDestinos(); ?>
    </table>

    <h
