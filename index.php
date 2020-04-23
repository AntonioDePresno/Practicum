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
        <div id="filtros">
                <form action="buscaPropiedad.php" id="FormularioBusqueda">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="campus">Campus Deseado</label>
                                <select class="form-control" id="campus">
                                    <option>Norte</option>
                                    <option>Sur</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label for="tipoPropiedad">Tipo de Propiedad</label>
                            <select class="form-control" id="tipoPropiedad">
                                <option>Casa</option>    
                                <option>Casa con Habitacion Compartida</option>
                                <option>Departamento</option>
                                <option>Departamento con Habitacion Compartida</option>
                                <option>Departamento con Habitacion Individual</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="genero">Género</label>
                            <select class="form-control" id="genero">
                                <option>Solo Mujeres</option>
                                <option>Solo Hombres</option>
                                <option>Ambos</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="precio">Precio Máximo</label>
                            <select class="form-control" id="genero">
                                <option>$2,000</option>
                                <option>$3,000</option>
                                <option>$4,000</option>
                                <option>$5,000</option>
                                <option>$6,000</option>
                                <option>$7,000</option>
                                <option>$8,000</option>
                                <option>$9,000</option>
                                <option>$10,000</option>
                                <option>$11,000</option>
                                <option>$12,000</option>
                                <option>$13,000</option>
                                <option>$14,000</option>
                                <option>$15,000</option>
                                <option>Más de $15,000</option>
                            </select>
                        </div>
                    </div>
                    <button id="boton" type="submit" class="btn btn-primary">Buscar</button>
                </form>
        </div>
        <div class="container" id="containerServicios">
            <div class="row">
                <div class="col" id="servicios">
                    <h2>Servicios Campus Norte</h2>
                    <img src="img/norte.jpeg">
                </div>
                <div class="col" id="servicios">
                    <h2>Servicios Campus Sur</h2>
                    <img src="img/sur.jpeg">
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

                    