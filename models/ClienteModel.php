<?php
    class ClienteModel{
        private $PDO;

        public function __construct(){
            $dir = $_SERVER['DOCUMENT_ROOT'];
            require_once("$dir/crud-mvc-poo-pdo/config/Conexion.php");
            $con = new Conexion();
            $this->PDO = $con->conexion();
        }

        public function listarClientes(){
            $listado = $this->PDO->prepare("SELECT * FROM clientes");
            return ($listado->execute()) ? $listado->fetchAll() : false;
        }

        public function saveCliente($nombre, $apellido, $correo, $telefono){
            $consulta_insert = $this->PDO->prepare('INSERT INTO clientes(nombre,apellido,correo,telefono) VALUES(:nombre,:apellido,:correo,:telefono)');
            $consulta_insert->execute(array(
                ':nombre' =>$nombre,
                ':apellido' =>$apellido,
                ':telefono' =>$telefono,
                ':correo' =>$correo
            ));
        }

        public function updateCliente($id, $nombre, $apellido, $correo, $telefono){
            $update_cliente = $this->PDO->prepare('UPDATE clientes SET nombre = :nombre, apellido = :apellido, correo = :correo, telefono = :telefono WHERE id = :id');
            $update_cliente->execute(array(
                ':id' =>$id,
                ':nombre' =>$nombre,
                ':apellido' =>$apellido,
                ':telefono' =>$telefono,
                ':correo' =>$correo
            ));
        }

        public function clientePorId($id){
            $clienteObtenido = $this->PDO->prepare("SELECT * FROM clientes WHERE id = :id");
            $clienteObtenido->bindParam(":id",$id);
            return ($clienteObtenido->execute()) ? $clienteObtenido->fetch() : false ;
        }

        public function deleteCliente($id){
            $deleteCliente = $this->PDO->prepare("DELETE FROM clientes WHERE id = :id");
            $deleteCliente->bindParam(":id",$id);
            $deleteCliente->execute();
        }
    }
?>