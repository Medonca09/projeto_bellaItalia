<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="Assets/italia.svg" />
    <link rel="stylesheet" href="css/reservaPac.css">
    <title>BellaItalia - Reserva</title>
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
    <div class="formReserva" id="reserva">
        <form id="regForm" action="listarReservas.php" method="post" class="formulario">
            <div class="tab">
                <h1>Seu Dados</h1>
                Nome: <input class="input-box" type="text" name="nome_cliente" placeholder="Digite seu nome" required><br>
                CPF: <input class="input-box" type="text" name="cpf_cliente" placeholder="Digite seu CPF" required><br>
                Email: <input class="input-box" type="email" name="email_cliente" placeholder="Digite seu e-mail" required><br>
            </div>

            <div class="tab">
                <h1>Escolha seu destino</h1>
                Nome do destino: <input class="input-box" type="text" name="nome_destino" placeholder="Digite o nome do destino" required><br>
                Região do destino: <input class="input-box" type="text" name="regiao_destino" placeholder="ex: (sul, norte, leste...)" required><br>
                Turismo: <input class="input-box" type="text" name="turismo_destino" placeholder="ex: (colisseu, torre de pisa...)" required><br>
            </div>

            <div class="tab">
                <h1>Reserva de Hotel</h1>
                Nome do Hotel: <input class="input-box" type="text" name="nome_hotel" placeholder="Digite o nome do hotel" required><br>
                Cidade do Hotel: <input class="input-box" type="text" name="cidade_hotel" placeholder="" required><br>
                Dias de Hospedagem: <input class="input-box" type="number" name="dias_hospedagem" required><br>
                Data de Chegada: <input class="input-box" type="date" name="data_chegada" required><br>
                Data de Saída: <input class="input-box" type="date" name="data_saida" required><br>
            </div>

            <div class="btn-button">
                <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button class="btn" type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
            </div>
        </form>
    </div>

    <script src="js/functionReserva.js"></script>
</body>

</html>