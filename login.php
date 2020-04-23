<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css"> 
    </head>
    <header>
        <?php include 'includes/menu.php'; ?>
    </header>
    <body>
        <div class="container" id="containerInicioSesion">
            <form action="loginValidation.php" id="FormularioInicio">
            <h1>Iniciar Sesión</h1>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="contrseña">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña">
                </div>
                <button id="boton" type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <a href="recuperaContra.php">Olvide mi contrseña</a>
            </form>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>