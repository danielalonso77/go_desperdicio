var tabla;

 //funcion que ejecuta el inicio del tabf
 function init() {
     mostrarform(false);
     listar();
 
     $("#formulario_confec").on("submit", function(e){
         guardaryeditar(e);
     })
 }
   //funcion listar
   /*
function listar(){
	tabla=$('#tbllistado').dataTable({
		"aProcessing": true,//activamos el procedimiento del datatable
		"aServerSide": true,//paginacion y filrado realizados por el server
		dom: 'Bfrtip',//definimos los elementos del control de la tabla
		buttons: [
		'copyHtml5',
		'excelHtml5',
		'csvHtml5',
		'pdf'
		],
		"ajax":
		{
			url:'../ajax/producto.php?op=listar',
			type: "get",
			dataType : "json",
			error:function(e){
				console.log(e.responseText);
			}
		},
		"bDestroy":true,
		"iDisplayLength":10,//paginacion
		"order":[[0,"desc"]]//ordenar (columna, orden)
	}).DataTable();
}
*/

//funcion para guardaryeditar
function guardaryeditar(e){
    e.preventDefault();//no se activara la accion predeterminada 
    $("#btnGuardar").prop("disabled",true);
    var formData=new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/producto.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos){
            mostrarform(false);
            tabla.ajax.reload();
            if(datos==1){
                Swal.fire({
                    icon: "success",
                    title: '',
                    html:'<b style="color:#000">SE GUARDO CON EXITO</b>',
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {
                        var ul=document.getElementById('ultimo').value;
                        var e=btoa(ul);
                        window.open(url+"pdf/venta.php?e="+e);
                        location.reload();
                    }
                })
            }else{
                Swal.fire({
                    icon: "error",
                    title: '',
                    html:'<b style="color:#000">NO SE PUDO REALIZAR LA ACCIÓN</b>',
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {}
                })
            }
        }
    });

    limpiar();
}

 //cancelar form
function cancelarform(){
    limpiar();
    mostrarform(false);
}
   

   //funcion que permite hacer el tomar
    function allowDrop(ev) {
        ev.preventDefault();
    }
    //funcion que permite arrastrar
    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }
    // funcion que permite arrastrar y soltar el dato en el target
    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }

    init();