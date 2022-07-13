<?php
//incluimos la conexion a la base de datos
require "../config/Conexion.php";

class Posicion 
{
    //implementamos un constructor
    public function __construct()
    {
        
    }
    
    //Implementamos un metodo para insertar
    public function insertar($posicion)
    {
        $sql = "INSERT INTO posiciones (posicion) VALUES ('$posicion')";
        return ejecutarConsulta($sql);
    }

    //implemmentamos un metodo para editar registros
    public function editar($idposiciones,$posicion)
    {
        $sql = "UPDATE posiciones set posicion='$posicion' WHERE idposiciones='$idposiciones'";
        return ejecutarConsulta($sql);
    }
    
        //implementamos un metodo para desactivar posiciones
        public function desactivar($idposiciones)
        {
            $sql = "UPDATE posiciones SET condicion = '0' WHERE idposiciones = '$idposiciones'";
            return ejecutarConsulta($sql);
        }
    
        //implementamos un metodo para activar posiciones
        public function activar($idposiciones)
        {
            $sql = "UPDATE posiciones SET condicion = '1' WHERE idposiciones = '$idposiciones'";
            return ejecutarConsulta($sql);
        }

        //implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idposiciones)
        {
            $sql = "SELECT * FROM posiciones WHERE idposiciones='$idposiciones'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //implementamos un metodo para listar los registros
        public function listar()
        {
            $sql = "SELECT * FROM posiciones";
            return ejecutarConsulta($sql);
        }
}

?>