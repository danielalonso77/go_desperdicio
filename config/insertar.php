<?php

require 'Conexion.php'

$id=isset($_POST["id"])?$_POST["id"]:"";
  $fecha=isset($_POST["fecha"])?$_POST["fecha"]:"";
  $turno=isset($_POST['turno'])? limpiarCadena($_POST["turno"]):"";
  $folio=isset($_POST['folio'])? limpiarCadena($_POST["folio"]):"";
  $orden=isset($_POST['orden'])? limpiarCadena($_POST["orden"]):"";
  $maquina=isset($_POST['maquina'])? limpiarCadena($_POST["maquina"]):"";
  $idoperador=isset($_POST['idoperador'])? limpiarCadena($_POST["idoperador"]):"";
  $operador=isset($_POST['operador'])? limpiarCadena($_POST["operador"]):"";
  $telarespza=isset($_POST['telarespza'])? limpiarCadena($_POST["telarespza"]):"";
  $bopppza=isset($_POST['bopppza'])? limpiarCadena($_POST["bopppza"]):"";
  $laminadopza=isset($_POST['laminadopza'])? limpiarCadena($_POST["laminadopza"]):"";
  $impresionpza=isset($_POST['impresionpza'])? limpiarCadena($_POST["impresionpza"]):"";
  $confeccionpza=isset($_POST['confeccionpza'])? limpiarCadena($_POST["confeccionpza"]):"";
  $almacenTela=isset($_POST['almacenTela'])? limpiarCadena($_POST["almacenTela"]):"";
  $telareskg=isset($_POST['telareskg'])? limpiarCadena($_POST["telareskg"]):"";
  $boppkg=isset($_POST['boppkg'])? limpiarCadena($_POST["boppkg"]):"";
  $laminadokg=isset($_POST['laminadokg'])? limpiarCadena($_POST["laminadokg"]):"";
  $impresionkg=isset($_POST['impresionkg'])? limpiarCadena($_POST["impresionkg"]):"";
  $confeccionkg=isset($_POST['confeccionkg'])?limpiarCadena($_POST["confeccionkg"]):"";
  $almacenTelakg=isset($_POST['almacenTelakg'])? limpiarCadena($_POST["almacenTelakg"]):"";
  $idinspector=isset($_POST['idinspector'])? limpiarCadena($_POST["idinspector"]):"";
  $nombre_insp=isset($_POST['nombre_insp'])? limpiarCadena($_POST["nombre_insp"]):"";
  $observaciones=isset($_POST['observaciones'])? limpiarCadena($_POST["observaciones"]):"";


  $sql = "INSERT INTO `tb_desp_confeccion_sapmat` (`id`, `fecha`, `turno`, `folio_hit`, `orden`, `maquina`, `idoperador`, `nombre_op`,
  `seg_telares_pza`, `seg_bopp_pza`, `seg_laminado_pza`, `seg_impresion_pza`, `seg_confeccion_pza`, `seg_almacen_tela_pza`, `des_telares_kg`, 
  `des_bopp_kg`, `des_laminado_kg`, `des_impresion_kg`, `des_confeccion_kg`, `des_almacen_tela_kg`, `idinspector`, `nombre_insp`, `ob`) 
  VALUES (null, '$turno', '$folio', '$orden','$maquina', 1, '$operador', '$telarespza', '$valvuladopza', 
  '$bopppza', '$laminadopza', '$impresionpza', '$confeccionpza', '$almacenTela', '$telareskg', '$boppkg', '$laminadokg', '$impresionkg',
   '$confeccionkg', '$almacenTelakg', 2, '$nombre_insp', '$observaciones');"

   if(mysql_query($sql, $conexion)){
    echo "New record created successfully";
   }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conexion);
?>