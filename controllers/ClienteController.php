<?php
    class ClienteController{
        private $model;

        public function __construct(){
            $dir = $_SERVER['DOCUMENT_ROOT'];
            require_once("$dir/crud-mvc-poo-pdo/models/ClienteModel.php");
            $this->model = new ClienteModel();
        }    

        public function listarClientes(){
            return ($this->model->listarClientes()) ? $this->model->listarClientes() : false;
        }

        public function guardarCliente($nombre, $apellido, $correo, $telefono){
            $this->model->saveCliente($nombre, $apellido, $correo, $telefono);
            echo
                "<script> 
                    alert('Cliente guardado con exito.');
                    window.location.replace('$dir/crud-mvc-poo-pdo/index.php');
                </script>";
            //header('Location: http://localhost/crud-mvc-poo-pdo/index.php');
        }

        public function buscarCliente($id){
            return ($this->model->clientePorId($id)) ? $this->model->clientePorId($id) : false;
        }

        public function actualizarCliente($id, $nombre, $apellido, $correo, $telefono){
            $this->model->updateCliente($id, $nombre, $apellido, $correo, $telefono);
            echo
                "<script> 
                    alert('Cliente actualizado con exito.');
                    window.location.replace('$dir/crud-mvc-poo-pdo/index.php');
                </script>";
        }

        public function eliminarCliente($id){
            $this->model->deleteCliente($id);
            echo
            "<script> 
                alert('Cliente Eliminado con exito.');
                window.location.replace('$dir/crud-mvc-poo-pdo/index.php');
            </script>";
        }
    }
?>