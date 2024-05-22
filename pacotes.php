<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pacotes.css">
    <title>Agência de Viagens</title>
</head>
<body>
    <div class="navBar">
        <h1>BELLAITALIA</h1>
    </div>
    <form id="regForm" action="inserir_dados.php" method="post">
        <div class="tab">
            <h1>Novo Cliente</h1>
            Nome: <input type="text" name="nome_cliente" required><br>
            CPF: <input type="text" name="cpf_cliente" required><br>
            Email: <input type="email" name="email_cliente" required><br>
        </div>

        <div class="tab">
            <h1>Novo Destino</h1>
            Nome do Destino: <input type="text" name="nome_destino" required><br>
            Região: <input type="text" name="regiao_destino" required><br>
            Turismo: <input type="text" name="turismo_destino" required><br>
        </div>

        <div class="tab">
            <h1>Novo Hotel</h1>
            Nome do Hotel: <input type="text" name="nome_hotel" required><br>
            Cidade do Hotel: <input type="text" name="cidade_hotel" required><br>
            Dias de Hospedagem: <input type="number" name="dias_hospedagem" required><br>
            Data de Chegada: <input type="date" name="data_chegada" required><br>
            Data de Saída: <input type="date" name="data_saida" required><br>
        </div>

        <div>
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
        </div>
    </form>

    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Enviar";
            } else {
                document.getElementById("nextBtn").innerHTML = "Próximo";
            }
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }
    </script>
</body>
</html>
