<?php
//incluimos la conexion a la base de datos
require "../config/Conexion.php";

class Area 
{
    //implementamos un constructor
    public function __construct()
    {
        
    }
    
    //Implementamos un metodo para insertar
    public function insertar($area)
    {
        $sql = "INSERT INTO areas (area) VALUES ('$area')";
        return ejecutarConsulta($sql);
    }

    //implemmentamos un metodo para editar registros
    public function editar($idareas,$area)
    {
        $sql = "UPDATE areas set area='$area' WHERE idareas='$idareas'";
        return ejecutarConsulta($sql);
    }
    
        //implementamos un metodo para desactivar areas
        public function desactivar($idareas)
        {
            $sql = "UPDATE areas SET condicion = '0' WHERE idareas = '$idareas'";
            return ejecutarConsulta($sql);
        }
    
        //implementamos un metodo para activar areas
        public function activar($idareas)
        {
            $sql = "UPDATE areas SET condicion = '1' WHERE idareas = '$idareas'";
            return ejecutarConsulta($sql);
        }

        //implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idareas)
        {
            $sql = "SELECT * FROM areas WHERE idareas='$idareas'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //implementamos un metodo para listar los registros
        public function listar()
        {
            $sql = "SELECT * FROM areas";
            return ejecutarConsulta($sql);
        }
}

?>