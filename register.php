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
                <a href="register.php" class="activo">Register</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="form-registro">
            <h4>Registro</h4>
            <form action="form">

                <input class="controls" type="text" name="id" id="id" placeholder="Ingrese su ID de usuario">

                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">

                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">

                <input class="controls" type="text" name="nick" id="nick" placeholder="Ingrese su nick">

                <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">

                <input class="" type="file" name="imagen" id="imagen" placeholder="Imgrese una imagen"><br><br>

                <div class="roles">
                    <select class="controls" name="rol">
                        <option value="" selected="selected">Indica cual es su rol</option>
                            <option value="opcion1">Invitado</option>
                            <option value="opcion2">Usuario</option>
                            <option value="opcion3">Administrador</option>
                        </option>
                    </select>
                </div>

                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>

                <input class="boton" type="submit" value="Registrar">

                <p><a href="login.html">¿Ya tengo cuenta?</a></p>
            </form>
        </section>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>