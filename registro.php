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
        <div class="container" id="containerReg">
            <div class="row">
                <div class="col">
                    <a href="registroProspecto.php"><button id="boton" class="btn btn-primary">Busco Alojamiento</button></a>
                </div>
                <div class="col">
                <a href="registroArrendatario.php"><button id="boton" class="btn btn-primary">Ofrezco Alojamiento</button></a>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
    
</html>