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
        <h1>DESTINOS MAIS DESEJADOS</h1>
        <div class="container">
            <div class="card">
                <img src="Assets/destinoRoma.jpg" alt="Roma">
                <div class="info">
                    <h2>Roma</h2>
                    <p>Roma é a capital da Itália e uma das cidades mais antigas do mundo, cheia de história e cultura.</p>
                </div>
                <a href="pacotes.php" class="btn">Ver mais</a>
            </div>
            <div class="card">
                <img src="Assets/destinoVeneza.jpg" alt="Veneza">
                <div class="info">
                    <h2>Veneza</h2>
                    <p>Veneza é famosa por seus canais, gôndolas e sua arquitetura única.</p>
                </div>
                <a href="pacotes.php" class="btn">Ver mais</a>
            </div>
            <div class="card">
                <img src="Assets/destinoFlorenza.jpg" alt="Florença">
                <div class="info">
                    <h2>Florença</h2>
                    <p>Florença é conhecida por sua arte renascentista e monumentos históricos.</p>
                </div>
                <a href="pacotes.php" class="btn">Ver mais</a>
            </div>
        </div>
    </section>

    <script src="js/carrosel.js"></script>
</body>

</html>