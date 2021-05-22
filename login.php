<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>OnlyPelis</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">OnlyPelis</h2>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="#">About Us</a>
                <a href="#">Películas</a>
                <a href="register.php">Register</a>
                <a href="login.php" class="activo">Login</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="form-registro">
            <h4>Ingresar</h4>
            <form action="">

                <input class="controls" type="text" name="nick" id="nick" placeholder="Ingrese su Nick name">

                <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">

                <input class="boton" type="submit" value="Entrar">

            </form>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>