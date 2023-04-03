<?php
    $dir = $_SERVER['DOCUMENT_ROOT'];
    require_once("$dir/crud-mvc-poo-pdo/controllers/ClienteController.php");
    $obj = new ClienteController();
    $cliente = $obj->buscarCliente($_GET['id']);
?>
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
        require_once("$dir/crud-mvc-poo-pdo/views/globals/Header.php");
    ?>
	<!--Inicio Contenido-->
    <div class="container mb-3">
        <div class="card mt-3">
            <div class="card-header">Editar Cliente</div>
            <div class="card-body">
                <form action="UpdateCliente.php" method="post">
                    <input id="id" name="id" type="hidden" value="<?php echo $cliente[0]?>">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name ="nombre" value="<?php echo $cliente[1]?>">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name ="apellido" value="<?php echo $cliente[2]?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="email" name ="email" value="<?php echo $cliente[3]?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name ="telefono" value="<?php echo $cliente[4]?>">
                    </div>
                    <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar Cliente</button>
                    <a class="btn btn-danger" href="GestionCliente.php">Cancelar</a>              
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