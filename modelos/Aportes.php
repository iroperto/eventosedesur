<?php
//incluimos la conexion a la base de datos
require "../config/Conexion.php";

class Aporte 
{
    //implementamos un constructor
    public function __construct()
    {
        
    }
    
    //Implementamos un metodo para insertar
    public function insertar($usuario,$monto,$fecha)
    {
        $sql = "INSERT INTO aportes (usuario,monto,fecha) VALUES ('$usuario','$monto','".date("Y-m-d")."')";
        return ejecutarConsulta($sql);
    }

    //implemmentamos un metodo para editar registros
    public function editar($idaportes,$usuario,$monto)
    {
        $sql = "UPDATE aportes set usuario='$usuario', monto='$monto' WHERE idaportes='$idaportes'";
        return ejecutarConsulta($sql);
    }
    
        //implementamos un metodo para eliminar aportes
        public function desactivar($idaportes)
        {
            $sql = "DELETE from aportes WHERE idaportes = '$idaportes'";
            return ejecutarConsulta($sql);
        }
    
        //implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idaportes)
        {
            $sql = "SELECT * FROM aportes WHERE idaportes='$idaportes'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //implementamos un metodo para listar los registros
        public function listar()
        {
            $sql = "SELECT * FROM aportes";
            return ejecutarConsulta($sql);
        }
}

?>