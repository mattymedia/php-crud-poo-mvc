<?php
    $dir = $_SERVER['DOCUMENT_ROOT'];
    require_once("$dir/crud-mvc-poo-pdo/controllers/ClienteController.php");
    $obj = new ClienteController();
    $obj->guardarCliente($_POST['nombre'],
            $_POST['apellido'], $_POST['email'], $_POST['telefono']);
?>