var tabla;

 //funcion que ejecuta el inicio del tabf
 function init() {
     $("#formulario_ext").on("submit", function(e){
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
async function guardaryeditar(e){
    e.preventDefault();//no se activara la accion predeterminada 
    $("#btnGuardar").prop("disabled",true);
    var formData=new FormData($("#formulario_ext")[0]);	

    await $.ajax({
        url: "../ajax/extruder.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
       success: location.reload(),
   });
   limpiar();
}


init();