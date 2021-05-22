<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>OnlyPelis</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">OnlyPelis</h2>
            <nav>
                <a href="index.php" class="activo">Inicio</a>
                <a href="#">About Us</a>
                <a href="#">Películas</a>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="pelicula-principal">
            <div class="contenedor">
                <h3 class="titulo">Focus</h3>
                <p class="descripcion">
                    Nicky, un consumado maestro de la estafa conoce a Jess, una atractiva y joven ladrona que está dando sus primeros pasos en el oficio. Tras el intenso encuentro entre ambos, Nicky decide compartir sus trucos con ella.
                </p>
                <button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
                <button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
            </div>
        </div>

        <div class="peliculas-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
                <h3>Películas Recomendadas</h3>
                <div class="indicadores"></div>
            </div>

            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

                <div class="contenedor-carousel">
                    <div class="carousel">
                        <div class="pelicula">
                            <a href="#"><img src="img/purga.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/annabelle.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/hannibal.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/ocho_apellidos_vascos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/pinguinos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/witheChicks.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/focus.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/cadena_perpetua.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/green_mile.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/purga.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/annabelle.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/hannibal.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/ocho_apellidos_vascos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/pinguinos.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/witheChicks.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/focus.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/cadena_perpetua.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="img/green_mile.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>