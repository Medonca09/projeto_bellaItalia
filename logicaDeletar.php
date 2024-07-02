<?php

include "conexao.php";

function deletarCliente($id_cliente)
{
    $conn = conectarBanco();
    $stmt = $conn->prepare("DELETE FROM Cliente WHERE id_cliente = ?");
    $stmt->bind_param("i", $id_cliente);

    if ($stmt->execute()) {
        echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='./css/editar.css'>
    <title>Atualizou</title>
</head>

<body>
    <div class='nav'>
        <div class='navBar'>
            <h1>BELLAITALIA TOURS</h1>
            <div class='links'>
                <a href='./home.php'>Home</a>
                <a href='#news'>Sobre</a>
                <a href='#contact'>Pacotes</a>
            </div>
        </div>
    </div>
    <div class='homeEditar'>
        <div class='fundo-Mensagem'>
            <div class='mensagem-atualizou'>
                <h1>Dados Deletados!!</h1>
            </div>
        </div>
        <div class='btn-button'>
            <a href='listarReservas.php' class='btn'>Voltar</a>
        </div>
    </div>
</body>

</html>";
    } else {
        throw new Exception("Erro ao deletar cliente: " . $stmt->error); 
    }

    $stmt->close();
    $conn->close();
}

function deletarDestino($id_destino)
{
    $conn = conectarBanco();
    $stmt = $conn->prepare("DELETE FROM Destino WHERE id_destino = ?");
    $stmt->bind_param("i", $id_destino);

    if ($stmt->execute()) {
        echo "";
    } else {
        throw new Exception("Erro ao deletar destino: " . $stmt->error);
        /* $conn->rollback() */
    }

    $stmt->close();
    $conn->close();
}

function deletarHotel($id_hotel)
{
    $conn = conectarBanco();
    $stmt = $conn->prepare("DELETE FROM Hotel WHERE id_hotel = ?");
    $stmt->bind_param("s", $id_hotel);

    if ($stmt->execute()) {
        echo "";
    } else {
        throw new Exception("Erro ao deletar hotel: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    /* if (isset($_POST['id_cliente'])) {
        $id_cliente = intval($_POST['id_cliente']);
        deletarCliente($id_cliente);
    }

    if (isset($_POST['id_destino'])) {
        $id_destino = intval($_POST['id_destino']);
        deletarDestino($id_destino);
    }

    if (isset($_POST['id_hotel'])) {
        $id_hotel = $_POST['id_hotel'];
        deletarHotel($id_hotel);
    } */

    $id = $_GET['id'];
    deletarCliente($id);
    deletarDestino($id);
    deletarHotel($id);
}
?>
