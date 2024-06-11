<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados</title>
</head>
<body>
    <h2>Atualizar Dados</h2>

    <form action="logicaEditar.php" method="POST">
        <label for="tipo_dados">Selecione o tipo de dados:</label>
        <select name="tipo_dados" id="tipo_dados">
            <option value="cliente">Cliente</option>
            <option value="destino">Destino</option>
            <option value="hotel">Hotel</option>
        </select>
        <br><br>

        <div id="campos_cliente" style="display: none;">
            <label for="id_cliente">ID do Cliente:</label>
            <input type="text" name="id_cliente">
            <br><br>
            <label for="nome_cliente">Nome:</label>
            <input type="text" name="nome_cliente">
            <br><br>
            <label for="cpf_cliente">CPF:</label>
            <input type="text" name="cpf_cliente">
            <br><br>
            <label for="email_cliente">Email:</label>
            <input type="text" name="email_cliente">
            <br><br>
        </div>

        <div id="campos_destino" style="display: none;">
            <label for="id_destino">ID do Destino:</label>
            <input type="text" name="id_destino">
            <br><br>
            <label for="nome_destino">Nome:</label>
            <input type="text" name="nome_destino">
            <br><br>
            <label for="regiao_destino">Região:</label>
            <input type="text" name="regiao_destino">
            <br><br>
            <label for="turismo_destino">Turismo:</label>
            <input type="text" name="turismo_destino">
            <br><br>
        </div>

        <div id="campos_hotel" style="display: none;">
            <label for="id_hotel">ID do Hotel:</label>
            <input type="text" name="id_hotel">
            <br><br>
            <label for="nome_hotel">Nome:</label>
            <input type="text" name="nome_hotel">
            <br><br>
            <label for="cidade_hotel">Cidade:</label>
            <input type="text" name="cidade_hotel">
            <br><br>
            <label for="dias_hospedagem">Dias de Hospedagem:</label>
            <input type="text" name="dias_hospedagem">
            <br><br>
            <label for="data_chegada">Data de Chegada:</label>
            <input type="date" name="data_chegada">
            <br><br>
            <label for="data_saida">Data de Saída:</label>
            <input type="date" name="data_saida">
            <br><br>
        </div>

        <input type="submit" value="Atualizar Dados">
    </form>

    <script src="./js/functionEditar.js">
    </script>
</body>
</html>
