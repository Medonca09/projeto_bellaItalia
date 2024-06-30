<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = conectarBanco();

    if ($_POST['tipo_dados'] === 'cliente') {
        $id_cliente = $_POST['id_cliente'];
        $nome = $_POST['nome_cliente'];
        $cpf = $_POST['cpf_cliente'];
        $email = $_POST['email_cliente'];

        if (!empty($id_cliente)) {
            $sql = "UPDATE Cliente SET nome='$nome', cpf='$cpf', email='$email' WHERE id_cliente='$id_cliente'";
            /* $stmt = $conn->prepare($sql); */
            /* $stmt->bind_param('sssi', $nome, $cpf, $email, $id_cliente); */
        }
    } elseif ($_POST['tipo_dados'] === 'destino') {
        $id_destino = $_POST['id_destino'];
        $nome_destino = $_POST['nome_destino'];
        $regiao = $_POST['regiao_destino'];
        $turismo = $_POST['turismo_destino'];

        if (!empty($id_destino)) {
            $sql = "UPDATE Destino SET nome_destino=?, regiao=?, turismo=? WHERE id_destino=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $nome_destino, $regiao, $turismo, $id_destino);
        }
    } elseif ($_POST['tipo_dados'] === 'hotel') {
        $id_hotel = $_POST['id_hotel'];
        $nome_hotel = $_POST['nome_hotel'];
        $cidade_hotel = $_POST['cidade_hotel'];
        $dias_hospedagem = $_POST['dias_hospedagem'];
        $data_chegada = $_POST['data_chegada'];
        $data_saida = $_POST['data_saida'];

        if (!empty($id_hotel)) {
            $sql = "UPDATE Hotel SET nome_hotel=?, cidade_hotel=?, dias_hospedagem=?, data_chegada=?, data_saida=? WHERE id_hotel=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssisii", $nome_hotel, $cidade_hotel, $dias_hospedagem, $data_chegada, $data_saida, $id_hotel);
        }
    }

    if (isset($sql) && $conn->query($sql) === TRUE) {
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
                <h1>Dados atualizados com sucesso</h1>
            </div>
        </div>
        <div class='btn-button'>
            <a href='listarReservas.php' class='btn'>Voltar</a>
        </div>
    </div>
</body>

</html>";
    } else {
        echo "Erro ao atualizar dados: " . $conn->error;
    }

    $conn->close();
}
