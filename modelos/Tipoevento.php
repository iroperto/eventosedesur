<?php
//incluimos la conexion a la base de datos
require "../config/Conexion.php";

class TipoEvento 
{
    //implementamos un constructor
    public function __construct()
    {
        
    }
    
    //Implementamos un metodo para insertar
    public function insertar($tipo)
    {
        $sql = "INSERT INTO tipoevento (tipo) VALUES ('$tipo')";
        return ejecutarConsulta($sql);
    }

    //implemmentamos un metodo para editar registros
    public function editar($idtipoEvento,$tipo)
    {
        $sql = "UPDATE tipoevento set tipo='$tipo' WHERE idtipoEvento='$idtipoEvento'";
        return ejecutarConsulta($sql);
    }
    
        //implementamos un metodo para desactivar tipoeventos
        public function desactivar($idtipoEvento)
        {
            $sql = "UPDATE tipoeventos SET condicion = '0' WHERE idtipoEvento = '$idtipoEvento'";
            return ejecutarConsulta($sql);
        }
    
        //implementamos un metodo para activar tipoeventos
        public function activar($idtipoEvento)
        {
            $sql = "UPDATE tipoeventos SET condicion = '1' WHERE idtipoEvento = '$idtipoEvento'";
            return ejecutarConsulta($sql);
        }

        //implementamos un metodo para mostrar los datos de un registro a modificar
        public function mostrar($idtipoEvento)
        {
            $sql = "SELECT * FROM tipoeventos WHERE idtipoEvento='$idtipoEvento'";
            return ejecutarConsultaSimpleFila($sql);
        }

        //implementamos un metodo para listar los registros
        public function listar()
        {
            $sql = "SELECT * FROM tipoeventos";
            return ejecutarConsulta($sql);
        }
}

?>