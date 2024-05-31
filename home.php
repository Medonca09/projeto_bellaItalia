<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/destinos.css">
    <title>BellaItalia</title>
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
    <section class="carrosel">
        <button class="slide-arrow" id="slide-arrow-prev">
            &#8249;
        </button>
        <button class="slide-arrow" id="slide-arrow-next">
            &#8250;
        </button>
        <ul class="slides-container" id="slides-container">
            <li class="slide" id="coliseu"></li>
            <li class="slide" id="milao"></li>
            <li class="slide" id="veneza"></li>
            <li class="slide" id="piza"></li>
            <li class="slide" id="cidade-aleatoria"></li>
        </ul>
    </section>

    <section>
        <div class="destinos">
            <h1>OS DESTINOS MAIS DESEJADOS</h1>
        </div>
        <div class="container">
            <div class="card">
                <img src="Assets/destinoRoma.jpg" alt="Roma">
                <div class="info">
                    <h2>Roma</h2>
                    <p>Roma é a capital da Itália e uma das cidades mais antigas do mundo, cheia de história e cultura. É conhecida por seus monumentos icônicos...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoVeneza.jpg" alt="Veneza">
                <div class="info">
                    <h2>Veneza</h2>
                    <p>Veneza é famosa por seus canais, gôndolas e sua arquitetura única. Esta cidade encantadora, construída sobre uma lagoa, é conhecida por...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoFlorenza.jpg" alt="Florença">
                <div class="info">
                    <h2>Florença</h2>
                    <p>Florença é conhecida por sua arte renascentista e monumentos históricos. Como berço do Renascimento, Florença abriga tesouros...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoVaticano.jpg" alt="vaticano">
                <div class="info">
                    <h2>Vaticano</h2>
                    <p>A Cidade do Vaticano, situada em Roma, é o menor país do mundo. Sede da Igreja Católica, abriga a Basílica de São Pedro, a Capela Sistina e os Museus Vaticanos...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoVerona.jpg" alt="verona">
                <div class="info">
                    <h2>Verona</h2>
                    <p>Verona, localizada na região do Vêneto, é uma cidade encantadora conhecida pela sua rica história e beleza arquitetônica.</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destnoTurim.jpg" alt="turim">
                <div class="info">
                    <h2>Turim</h2>
                    <p>Turim, localizada no noroeste da Itália, é a capital da região do Piemonte e uma cidade rica em história e cultura. Conhecida por sua arquitetura elegante e pelas praças majestosas...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoMilao.jpg" alt="milão">
                <div class="info">
                    <h2>Milão</h2>
                    <p>Milão, a capital da moda e do design da Itália, é uma cidade vibrante e moderna localizada na região da Lombardia. Famosa por sua influência no mundo da moda...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
            <div class="card">
                <img src="Assets/destinoNapoles.jpg" alt="napoles">
                <div class="info">
                    <h2>Napoles</h2>
                    <p>Nápoles, situada na costa sudoeste da Itália, é a capital da região da Campânia e uma das cidades mais antigas e culturalmente ricas do país...</p>
                </div>
                <a href="pacotes.php" class="btn">Comprar $</a>
            </div>
        </div>
    </section>

    <script src="js/carrosel.js"></script>
</body>

</html>
