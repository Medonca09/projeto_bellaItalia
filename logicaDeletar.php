<?php

include "conexao.php";

function deletarCliente($id_cliente)
{
    $conn = conectarBanco();
    $stmt = $conn->prepare("DELETE FROM Cliente WHERE id_cliente = ?");
    $stmt->bind_param("i", $id_cliente);

    if ($stmt->execute()) {
        echo "Cliente deletado com sucesso!";
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
        echo "Destino deletado com sucesso!";
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
        echo "Hotel deletado com sucesso!";
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
