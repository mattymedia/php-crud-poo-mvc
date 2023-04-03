<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="crud-mvc-poo-pdo/assets/css/estilos.css">

</head>
<body>
    <?php  
        $dir = $_SERVER['DOCUMENT_ROOT']; 
        require_once("$dir/crud-mvc-poo-pdo/views/globals/Header.php");
    ?>
	<!--Inicio Contenido-->
    <div class="container mb-3 pt-3">
        <h3  style="text-align: center;">Crear nuevo cliente</h3>
        <div class="card mt-3">
            <div class="card-header">Formulario de clientes</div>
            <div class="card-body">
                <form action="SaveCliente.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name ="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name ="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="email" name ="email">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name ="telefono">
                    </div>
                    <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar Cliente</button>
                    <a class="btn btn-danger" href="../../index.php">Cancelar</a>   
                </form>
            </div>
        </div>
    </div>
	<!--Fin Contenido-->
    <?php
        require_once("$dir/crud-mvc-poo-pdo/views/globals/Footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>
</body>
</html>