<?php

require_once "../modelos/Extruder.php";


  $extru = new Extruder();

  echo 'hola';
  $id=isset($_POST["id"])?$_POST["id"]:"";
  $turno=isset($_POST["turno"])?$_POST["turno"]:"";
  $fecha = isset($_POST["fecha"])?$_POST["fecha"]:"";
  $extruder=isset($_POST["extruder"]) ? limpiarcadenas($_POST["extruder"]):"";
  $cinta=isset($_POST['cinta'])? limpiarCadena($_POST["cinta"]):"";
  $pelicula=isset($_POST['pelicula'])? limpiarCadena($_POST["pelicula"]):"";
  $nombre_op=isset($_POST['nombre_op'])? limpiarCadena($_POST["nombre_op"]):"";
  $idoperador=isset($_POST['idoperador'])? limpiarCadena($_POST["idoperador"]):"";
  $bobina=isset($_POST['bobina'])? limpiarCadena($_POST["bobina"]):"";
  $polietileno=isset($_POST['polietileno'])? limpiarCadena($_POST["polietileno"]):"";
  $plasta=isset($_POST['plasta'])? limpiarCadena($_POST["plasta"]):"";
  $idinspector=isset($_POST['idinspector'])? limpiarCadena($_POST["idinspector"]):"";
  $nombre_insp=isset($_POST['nombre_insp'])? limpiarCadena($_POST["nombre_insp"]):"";
  $observaciones=isset($_POST['observaciones'])? limpiarCadena($_POST["observaciones"]):"";

  switch ($_GET["op"]) {
    case 'guardaryeditar':
    if (empty($id)) {
      $rspta=$extru->insertar($id, $fecha, $extruder, $turno, $idoperador, $nombre_op,
       $cinta, $pelicula, $bobina, $polietileno, $plasta, $idinspector, $nombre_insp, $observaciones);
      echo $rspta;
    }else{
     $rspta=$extru->editar($id, $fecha, $extruder, $turno, $idoperador, $nombre_op,
     $cinta, $pelicula, $bobina, $polietileno, $plasta, $idinspector, $nombre_insp, $observaciones);
     echo $rspta;
   }
   break;
  }
?>