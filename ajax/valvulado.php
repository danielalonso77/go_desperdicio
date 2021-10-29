<?php

require_once "../modelos/Confeccion.php";
if (strlen(session_id())<1) 
  session_start();

$valvuldaro = new Valvulado();


$turno=isset($_POST['turno'])? limpiarCadena($_POST["turno"]):"";
$folio=isset($_POST['folio'])? limpiarCadena($_POST["folio"]):"";
$orden=isset($_POST['orden'])? limpiarCadena($_POST["orden"]):"";
$maquina=isset($_POST['maquina'])? limpiarCadena($_POST["maquina"]):"";
$operador=isset($_POST['operador'])? limpiarCadena($_POST["operador"]):"";
$telares=isset($_POST['telares'])? limpiarCadena($_POST["telares"]):"";
$valvulado=isset($_POST['valvulado'])? limpiarCadena($_POST["valvulado"]):"";
$bopp=isset($_POST['bopp'])? limpiarCadena($_POST["bopp"]):"";
$laminado=isset($_POST['laminado'])? limpiarCadena($_POST["laminado"]):"";
$impresion=isset($_POST['impresion'])? limpiarCadena($_POST["impresion"]):"";
$confeccion=isset($_POST['confeccion'])? limpiarCadena($_POST["confeccion"]):"";
$almacen=isset($_POST['almacen'])? limpiarCadena($_POST["almacen"]):"";
$telares=isset($_POST['telares'])? limpiarCadena($_POST["telares"]):"";
$valvulado=isset($_POST['valvulado'])? limpiarCadena($_POST["valvulado"]):"";
$bopp2=isset($_POST['bopp'])? limpiarCadena($_POST["bopp"]):"";
$laminado=isset($_POST['laminado'])? limpiarCadena($_POST["laminado"]):"";
$impresion=isset($_POST['impresion'])? limpiarCadena($_POST["impresion"]):"";
$confeccion=isset($_POST['confeccion'])?limpiarCadena($_POST["confeccion"]):"";
$almacenTela=isset($_POST['almacenTela'])? limpiarCadena($_POST["almacenTela"]):"";
$inspector=isset($_POST['inspector'])? limpiarCadena($_POST["inspector"]):"";
$observaciones=isset($_POST['observaciones'])? limpiarCadena($_POST["observaciones"]):"";

  switch ($_GET["op"]) {
    case 'guardaryeditar':
    if (empty($idtipousuario)) {
      $rspta=$tipousuario->insertar($nombre,$descripcion,$idusuario);
      echo $rspta;
    }else{
     $rspta=$tipousuario->editar($idtipousuario,$nombre,$descripcion,$idusuario);
     echo $rspta;
   }
   break;
  
  
   case 'desactivar':
   $rspta=$tipousuario->desactivar($idtipousuario);
   echo $rspta;
   break;
  
   case 'activar':
   $rspta=$tipousuario->activar($idtipousuario);
   echo $rspta;
   break;
  
   case 'mostrar':
   $rspta=$tipousuario->mostrar($idtipousuario);
   echo json_encode($rspta);
   break;
  
   case 'listar':
   $rspta=$tipousuario->listar();
   $data=Array();
  
   while ($reg=$rspta->fetch_object()) {
    $data[]=array(
      "0"=>'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idtipousuario.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idtipousuario.')"><i class="fa fa-close"></i></button>',
      "1"=>$reg->nombre,
      "2"=>$reg->descripcion,
      "3"=>$reg->fechacreada
    );
  }
  $results=array(
               "sEcho"=>1,//info para datatables
               "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
               "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
               "aaData"=>$data); 
  echo json_encode($results);   
  break;
  
  case 'selectTipousuario':
  $rspta=$tipousuario->select();
  echo '<option value="0">seleccione...</option>';
  while ($reg=$rspta->fetch_object()) {
    echo '<option value=' . $reg->idtipousuario.'>'.$reg->nombre.'</option>';
  }
  break;

?>