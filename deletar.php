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

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $conn = conectarBanco();

    if (isset($_GET['id_cliente'])) {
        $id_cliente = $_GET['id_cliente'];
        $sql = "DELETE FROM Cliente WHERE id_cliente = '$id_cliente'";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente deletado com sucesso. ";
        } else {
            echo "Erro ao deletar cliente: " . $conn->error . " ";
        }
    }

    if (isset($_GET['id_destino'])) {
        $id_destino = $_GET['id_destino'];
        $sql = "DELETE FROM Destino WHERE id_destino = '$id_destino'";
        if ($conn->query($sql) === TRUE) {
            echo "Destino deletado com sucesso. ";
        } else {
            echo "Erro ao deletar destino: " . $conn->error . " ";
        }
    }

    if (isset($_GET['id_hotel'])) {
        $id_hotel = $_GET['id_hotel'];
        $sql = "DELETE FROM Hotel WHERE id_hotel = '$id_hotel'";
        if ($conn->query($sql) === TRUE) {
            echo "Hotel deletado com sucesso.";
        } else {
            echo "Erro ao deletar hotel: " . $conn->error;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/deletar.css">
    <title>Deletar Dados</title>
</head>

<body>
    <div class="container">
        <h1>Deletar Dados</h1>
        <p><a href="listarReservas.php">Voltar para Histórico de Dados</a></p>
    </div>
</body>

</html>
