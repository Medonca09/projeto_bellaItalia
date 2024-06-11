<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Deletar Registro</title>
    <link rel="stylesheet" href="./css/deletar.css">
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
    <div class="deletar-dados">
        <div class="form-deletar">
            <div class="formulario">
                <div class="text-deletar">
                    <h1>Deletar Registro</h1>
                </div>
                <form method="POST" action="logicaDeletar.php">
                    <label for="id_cliente">ID do Cliente:</label>
                    <input class="input-box" type="text" name="id_cliente" id="id_cliente">
                    <label for="id_destino">ID do Destino:</label>
                    <input class="input-box" type="text" name="id_destino" id="id_destino">
                    <label for="nome_hotel">Id do Hotel:</label>
                    <input class="input-box" type="text" name="id_hotel" id="id_hotel">
                    <br><br>
                    <div class="btn-button">
                        <button class="btn" type="submit">Deletar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>