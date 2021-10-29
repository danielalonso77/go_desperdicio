<?php

require_once "../modelos/Confeccion.php";

  $confeccion = new Confeccion();

  echo 'estoy aqui';
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
  $ob=isset($_POST['ob'])? limpiarCadena($_POST["ob"]):"";

  switch ($_GET["op"]){
    case 'guardaryeditar':
    if (empty($id)) {
      $rspta=$confeccion->insertar($id,$fecha,$turno, $folio, $orden,$maquina, $idoperador, $operador, $telarespza, 
      $bopppza, $laminadopza, $impresionpza, $confeccionpza, $almacenTela, $telareskg, $boppkg, $laminadokg, $impresionkg,
      $confeccionkg, $almacenTelakg, $idinspector, $nombre_insp, $ob);
      echo $rspta;
      
    }else{
      $rspta=$confeccion->editar($id,$fecha,$turno, $folio, $orden,$maquina, $idoperador, $operador, $telarespza,
      $bopppza, $laminadopza, $impresionpza, $confeccionpza, $almacenTela, $telareskg, $boppkg, $laminadokg, $impresionkg,
      $confeccionkg, $almacenTelakg, $idinspector, $nombre_insp, $ob);
      echo $rspta;
   }
   break;

   case 'eliminar':

    
    break;
     case 'salir':
  
            $id=$_SESSION['idusuario'];
            $sql="UPDATE usuarios SET iteracion='0' WHERE idusuario='$id'";
            echo $sql; 
            ejecutarConsulta($sql);       
          
          
              //Limpiamos las variables de sesión   
            session_unset();
                  //Destruìmos la sesión
            session_destroy();
                  //Redireccionamos al login
            header("Location: ../index.php");
          
          break;

   
  }
?>