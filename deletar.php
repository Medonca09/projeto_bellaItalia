<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Deletar Registro</title>
</head>
<body>
    <h1>Deletar Registro</h1>
    <form method="POST" action="logicaDeletar.php">
        <h2>Deletar Cliente</h2>
        <label for="id_cliente">ID do Cliente:</label>
        <input type="text" name="id_cliente" id="id_cliente">
        <br><br>
        
        <h2>Deletar Destino</h2>
        <label for="id_destino">ID do Destino:</label>
        <input type="text" name="id_destino" id="id_destino">
        <br><br>
        
        <h2>Deletar Hotel</h2>
        <label for="nome_hotel">Id do Hotel:</label>
        <input type="text" name="id_hotel" id="id_hotel">
        <br><br>
        
        <button type="submit">Deletar</button>
    </form>
</body>
</html>
