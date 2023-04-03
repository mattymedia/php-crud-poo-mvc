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
    <link rel="stylesheet" href="/crud-mvc-poo-pdo/assets/css/estilos.css">

</head>
<body>
    <?php
        $dir = $_SERVER['DOCUMENT_ROOT'];
        require_once("$dir/crud-mvc-poo-pdo/views/globals/Header.php");
        require_once("$dir/crud-mvc-poo-pdo/controllers/ClienteController.php");
        $obj = new ClienteController();
        $resultado = $obj->listarClientes();
    ?>
	<!--Inicio Contenido-->
    <div class="container">
        <div class="pt-3">
            <a class="btn btn-primary" href="../../index.php">Regresar al Listado</a>  
        </div>
        
        <div class="card mt-3">
            <div class="card-header text-center"><h3>Gestion de clientes</h3></div>
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        </tr>                  
                    </thead>
                    <tbody>
                    <?php foreach($resultado as $fila):?>
                        <tr >
                            <td><?php echo $fila[1]; ?></td>
                            <td><?php echo $fila[2]; ?></td>
                            <td><?php echo $fila[3]; ?></td>
                            <td><?php echo $fila[4]; ?></td>
                            <td><a class="btn btn-success" href="EditarCliente.php?id=<?php echo $fila['0']; ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="EliminarCliente.php?id=<?php echo $fila['0']; ?>">Eliminar</a></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
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