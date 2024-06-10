<?php
include 'inserir_dados.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = conectarBanco();

    if ($_POST['tipo_dados'] === 'cliente') {
        $id_cliente = $_POST['id_cliente'];
        $nome = $_POST['nome_cliente'];
        $cpf = $_POST['cpf_cliente'];
        $email = $_POST['email_cliente'];

        if (!empty($id_cliente)) {
            $sql = "UPDATE Cliente SET nome='$nome', cpf='$cpf', email='$email' WHERE id_cliente='$id_cliente'";
        }
    } elseif ($_POST['tipo_dados'] === 'destino') {
        $id_destino = $_POST['id_destino'];
        $nome_destino = $_POST['nome_destino'];
        $regiao = $_POST['regiao_destino'];
        $turismo = $_POST['turismo_destino'];

        if (!empty($id_destino)) {
            $sql = "UPDATE Destino SET nome_destino='$nome_destino', regiao='$regiao', turismo='$turismo' WHERE id_destino='$id_destino'";
        }
    } elseif ($_POST['tipo_dados'] === 'hotel') {
        $id_hotel = $_POST['id_hotel'];
        $nome_hotel = $_POST['nome_hotel'];
        $cidade_hotel = $_POST['cidade_hotel'];
        $dias_hospedagem = $_POST['dias_hospedagem'];
        $data_chegada = $_POST['data_chegada'];
        $data_saida = $_POST['data_saida'];

        if (!empty($id_hotel)) {
            $sql = "UPDATE Hotel SET nome_hotel='$nome_hotel', cidade_hotel='$cidade_hotel', dias_hospedagem='$dias_hospedagem', data_chegada='$data_chegada', data_saida='$data_saida' WHERE id_hotel='$id_hotel'";
        }
    }

    if (isset($sql) && $conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar dados: " . $conn->error;
    }

    $conn->close();
}
?>