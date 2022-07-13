var tabla;

//funcion que se ejecuta al inicio
function init() {
    mostrarform(false);
    listar();
}

//funcion limpiar
function limpiar() {
    $("#idarea").val("");
    $("#area").val("");
}

//funcion para mostrar formulario
function mostrarform(flag) {
    if (flag) {
       $("#listadoregistros").hide();
       $("#formularioregistros").show();
       $("#btnGuardar").prop("disabled",false);
    } else {
        $("#listadoregistros").show();
        $("#formularioregistros").hide(); 
    }
}

//Funcion para cancelar un formulario
function cancelarform() {
    limpiar();
    mostrarform(false);   
}

//funcion listar
function listar() {
    tabla = $("#tbllistado").dataTable(
        {
            "aProcessing":true, //Activamos el proccesamiento del datatables
            "aSeverSide":true, //Paginacion y filtrado realizados por el servidor
            dom: 'Bfrtip', //Definimos los elementos del control de tabla
            buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax":
                {
                    url: '../../ajax/areas.php?op=listar',
                    type: "get",
                    dataType: "json",
                    error:function (e) {
                        console.log(e.responseText);
                    }
                },
            "bDestroy": true,
            "iDisplayLength": 5, //paginacion
            "order": [[ 0, "desc"]] //ordenar (columna,orden)
        }
        ).DataTable();
}

init();