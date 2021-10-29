<?php

require_once "../modelos/Entubado.php";


$entubado = new Entubado();

  $id=isset($_POST["id"])? limpiarCadena($_POST["id"]) :"";
  $fecha=isset($_POST["fecha"])?limpiarCadena($_POST["fecha"]):"";
  $turno=isset($_POST['turno'])? limpiarCadena($_POST["turno"]):"";
  $foliohit=isset($_POST['foliohit'])? limpiarCadena($_POST["foliohit"]):"";
  $idoprador=isset($_POST['idoprador'])? limpiarCadena($_POST["idoprador"]):"";
  $nombre_op=isset($_POST['nombre_op'])? limpiarCadena($_POST["nombre_op"]):"";
  $desp_bopp=isset($_POST['desp_bopp'])? limpiarCadena($_POST["desp_bopp"]):"";
  $desp_plastaa=isset($_POST['desp_plasta'])? limpiarCadena($_POST["desp_plasta"]):"";
  $idinspector=isset($_POST['idinspector'])? limpiarCadena($_POST["idinspector"]):"";
  $nombre_inspe=isset($_POST['nombre_inspe'])? limpiarCadena($_POST["nombre_inspe"]):"";
  $observaciones=isset($_POST['observaciones'])? limpiarCadena($_POST["observaciones"]):"";

  switch ($_GET["op"]) {
    case 'guardaryeditar':
    if (empty($id)) {
      $rspta=$entubado->insertar($id, $fecha, $folio_hit, $turno, $idoperador, $nombre_op, $desp_bopp, $desp_plasta, $idinspector, $nombre_insp, $observaciones);
      echo $rspta;
    }else{
     $rspta=$entubado->editar($id, $fecha, $folio_hit, $turno, $idoperador, $nombre_op, $desp_bopp, $desp_plasta, $idinspector, $nombre_insp, $observaciones);
     echo $rspta;
   }
   break;
  

  }
  
  

?>