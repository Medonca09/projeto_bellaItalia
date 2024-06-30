<?php 

include "inserir_dados.php";
$tipo_dados = $_GET['tipo_dados'];
$id = $_GET['id'];
switch ($tipo_dados) {
    case 'clientes':
       $dados = visualizarCliente($id);
       /* var_dump($dados); */
        break;
    
    default:
        # code...
        break;
}
/* var_dump($tipo_dados); */

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/editar.css">
    <title>Atualizar Dados</title>
</head>

<body>
    <div class="nav">
        <div class="navBar">
            <h1>BELLAITALIA TOURS</h1>
            <div class="links">
                <a href="./home.php">Home</a>
                <a href="./listarReservas.php">Voltar</a>
                
            </div>
        </div>
    </div>
    <div class="editar-dados">
        <div class="formEditar">
            <form action="logicaEditar.php" method="POST" class="formulario">
                <h2>Atualizar Dados</h2>
                <div class="label-select">
                    <label for="tipo_dados" id="label">Selecione o tipo de dados:</label>
                    <select name="tipo_dados" id="tipo_dados">
                        <option value=""></option>
                        <option value="cliente" <?= $tipo_dados == 'clientes'? 'selected' : ''?>>Cliente</option>
                        <option value="destino" <?= $tipo_dados == 'destino'? 'selected' : ''?>>Destino</option>
                        <option value="hotel" <?= $tipo_dados == 'hotel'? 'selected' : ''?>>Hotel</option>
                    </select>
                    <br><br>
                </div>
                <div id="campos_cliente" style="display: <?= $tipo_dados == 'clientes'? 'block' : 'none'?>">
                    <label for="id_cliente">ID do Cliente:</label>
                    <input class="input-box" type="text" name="id_cliente" value="<?= isset($dados) ?$dados['id_cliente'] :""?>">
                    <br><br>
                    <label for="nome_cliente">Nome:</label>
                    <input class="input-box" type="text" name="nome_cliente" value="<?= isset($dados) ?$dados['nome'] :""?>">
                    <br><br>
                    <label for="cpf_cliente">CPF:</label>
                    <input class="input-box" id="cpf" type="text" name="cpf_cliente" value="<?= isset($dados) ?$dados['cpf'] :""?>">
                    <br><br>
                    <label for="email_cliente">Email:</label>
                    <input class="input-box" type="text" name="email_cliente" value="<?= isset($dados) ?$dados['email'] :""?>">
                    <br><br>
                </div>

                <div id="campos_destino" style="display: <?= $tipo_dados == 'destino'? 'block' : 'none'?>">
                    <label for="id_destino">ID do Destino:</label>
                    <input class="input-box" type="text" name="id_destino">
                    <br><br>
                    <label for="nome_destino">Nome:</label>
                    <input class="input-box" type="text" name="nome_destino">
                    <br><br>
                    <label for="regiao_destino">Região:</label>
                    <input class="input-box" type="text" name="regiao_destino">
                    <br><br>
                    <label for="turismo_destino">Turismo:</label>
                    <input class="input-box" type="text" name="turismo_destino">
                    <br><br>
                </div>

                <div id="campos_hotel" style="display: <?= $tipo_dados == 'hotel'? 'block' : 'none'?>">
                    <label for="id_hotel">ID do Hotel:</label>
                    <input class="input-box" type="text" name="id_hotel">
                    <br><br>
                    <label for="nome_hotel">Nome:</label>
                    <input class="input-box" type="text" name="nome_hotel">
                    <br><br>
                    <label for="cidade_hotel">Cidade:</label>
                    <input class="input-box" type="text" name="cidade_hotel">
                    <br><br>
                    <label for="dias_hospedagem">Dias de Hospedagem:</label>
                    <input class="input-box" type="text" name="dias_hospedagem">
                    <br><br>
                    <label for="data_chegada">Data de Chegada:</label>
                    <input class="input-box" type="text" name="data_chegada">
                    <br><br>
                    <label for="data_saida">Data de Saída:</label>
                    <input class="input-box" type="text" name="data_saida">
                    <br><br>
                </div>
                <div class="btn-submit">
                    <input class="submit" type="submit" value="Atualizar Dados">
                </div>
            </form>
        </div>
    </div>
    <script src="JS/functionEditar.js"></script>
    <script src="JS/mascaraCpf.js"></script>
</body>

</html>