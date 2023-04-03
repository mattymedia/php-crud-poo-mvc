<?php
    $dir = $_SERVER['DOCUMENT_ROOT'];
    require_once("$dir/crud-mvc-poo-pdo/controllers/ClienteController.php");
    $obj = new ClienteController();
    $obj->eliminarCliente($_GET['id']);
?>