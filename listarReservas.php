<?php
include 'inserir_dados.php';
$dados = [
    'clientes' => listarClientes(),
    'destinos' => listarDestinos(),
    'hoteis' => listarHoteis()
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/listarReserva.css">
    <title>Histórico de Dados</title>
</head>

<body>
    <div class="nav">
        <div class="navBar">
            <h1>BELLAITALIA TOURS</h1>
            <div class="links">
                <a href="home.php">Home</a>
                <a href="#news">Sobre</a>
                <a href="#contact">Pacotes</a>
            </div>
        </div>
    </div>
    <div class="table">
        <div class="info-table">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>ID Cliente</th>
                        <th>Nome Cliente</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>ID Destino</th>
                        <th>Nome Destino</th>
                        <th>Região</th>
                        <th>Turismo</th>
                        <th>ID hotel</th>
                        <th>Nome do Hotel</th>
                        <th>Cidade do Hotel</th>
                        <th>Dias de Hospedagem</th>
                        <th>Data de Chegada</th>
                        <th>Data de Saída</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php
                $maxRows = max(count($dados['clientes']), count($dados['destinos']), count($dados['hoteis']));

                for ($i = 0; $i < $maxRows; $i++) {
                    echo "<tr>";

                    if (isset($dados['clientes'][$i])) {
                        echo "<td>" . $dados['clientes'][$i]['id_cliente'] . "</td>";
                        echo "<td>" . $dados['clientes'][$i]['nome'] . "</td>";
                        echo "<td>" . $dados['clientes'][$i]['cpf'] . "</td>";
                        echo "<td>" . $dados['clientes'][$i]['email'] . "</td>";
                    } else {
                        echo "<td colspan='4'></td>";
                    }

                    if (isset($dados['destinos'][$i])) {
                        echo "<td>" . $dados['destinos'][$i]['id_destino'] . "</td>";
                        echo "<td>" . $dados['destinos'][$i]['nome_destino'] . "</td>";
                        echo "<td>" . $dados['destinos'][$i]['regiao'] . "</td>";
                        echo "<td>" . $dados['destinos'][$i]['turismo'] . "</td>";
                    } else {
                        echo "<td colspan='4'></td>";
                    }

                    if (isset($dados['hoteis'][$i])) {
                        /* echo "<td>" . $dados['hoteis'][$i]['id_hotel'] . "</td>"; */
                        echo "<td>" . $dados['hoteis'][$i]['nome_hotel'] . "</td>";
                        echo "<td>" . $dados['hoteis'][$i]['cidade_hotel'] . "</td>";
                        echo "<td>" . $dados['hoteis'][$i]['dias_hospedagem'] . "</td>";
                        echo "<td>" . $dados['hoteis'][$i]['data_chegada'] . "</td>";
                        echo "<td>" . $dados['hoteis'][$i]['data_saida'] . "</td>";
                    } else {
                        echo "<td colspan='5'></td>";
                    }

                    echo "<td class='action-icons'>";
                    echo "<a href='editar.php?id=" . $i . "'><i class='fas fa-pen'></i></a>";
                    echo "<a href='deletar.php?id_cliente=" . $dados['clientes'][$i]['id_cliente'] . "&id_destino=" . $dados['destinos'][$i]['id_destino'] . "&id_hotel=" . $dados['hoteis'][$i]['id_hotel'] . "'><i class='fas fa-trash'></i></a>";

                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>