<?php
    require_once "../modelos/Areas.php";

    $area = new Area();

    $idareas = isset($_POST['idareas'])?limpiarCadena($_POST['idareas']):"";
    $area_cont = isset($_POST['area'])?limpiarCadena($_POST['area']):"";

    switch ($_GET['op']) {
        case 'guardaryeditar':
            if (empty($idareas)) {
                $rspta = $area->insertar($area_cont);
                echo $rspta ? "Area Creada" : "Area no se pudo crear";                
            } else {
                $rspta = $area->editar($idareas,$area_cont);
                echo $rspta ? "Area actualizada" : "Area no se pudo actualizar";
            }            
            break;
        case 'desactivar':
            $rspta = $area->desactivar($idareas);
            echo $rspta ? "Area desactivada" : "Area no se pudo desactivar";
            break;
        case 'activar':
            $rspta = $area->activar($idareas);
            echo $rspta ? "Area activada" : "Area no se pudo activar";
            break;
        case 'mostrar':
            $rspta = $area->mostrar($idareas);
            //codificamos el resultado usando Json
            echo json_encode($rspta);
            break;
        case 'listar':
            $rspta = $area->listar();
            //declaramos un arreglo vacio
            $data = Array();

            while ($reg=$rspta->fetch_object()) {
                $data[] = array(
                    "0"=>$reg->idareas,
                    "1"=>$reg->area,
                    "2"=>$reg->condicion
                );
            }

            $results = array(
                "sEcho" => 1, //Informacion para datatables
                "iTotalRecords" =>  count($data), //Enviamos el total de registros al datatables
                "iTotalDisplayRecords" => count($data), //enviamos el total de registros a visualizar
                "aaData"=>$data
            );

            echo json_encode($results);
            break;
    }
?>