<?php

require_once "../modelos/Confeccion.php";
if (strlen(session_id())<1) 
  session_start();

$impresion = new Impresion();


  $op=isset($_POST['op'])? limpiarCadena($_POST["folio"]):"";
  $foliohit=isset($_POST['foliohit'])? limpiarCadena($_POST["foliohit"]):"";
  $maquina=isset($_POST['maquina'])? limpiarCadena($_POST["maquina"]):"";
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