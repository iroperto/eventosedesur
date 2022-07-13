<?php
//incluimos la conexion a la base de datos
require "../config/Conexion.php";

class Roles 
{
    //implementamos un constructor
    public function __construct()
    {
        
    }
    
    //Implementamos un metodo para insertar
    public function insertar($descRol)
    {
        $sql = "INSERT INTO roles (descRol) VALUES ('$descRol')";
        return ejecutarConsulta($sql);
    }

    //implemmentamos un metodo para editar registros
    public function editar($idroles,$descRol)
    {
        $sql = "UPDATE roles set descRol='$descRol' WHERE idroles='$idroles'";
        return ejecutarConsulta($sql);
    }
    
        //implementamos un metodo para desactivar roles
        public function desactivar($idroles)
        {
            $sql = "UPDATE roles SET condicion = '0' WHERE idroles = '$idroles'";
            return ejecutarConsulta($sql);
        }
    
        //implementamos un metodo para activar roles
        public function activar($idroles)
        {
            $sql = "UPDATE roles SET condicion = '1' WHERE idroles = '$idroles'";
            return ejecutarConsulta($sql);
        }

        //implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idroles)
        {
            $sql = "SELECT * FROM roles WHERE idroles='$idroles'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //implementamos un metodo para listar los registros
        public function listar()
        {
            $sql = "SELECT * FROM roles";
            return ejecutarConsulta($sql);
        }
}

?>