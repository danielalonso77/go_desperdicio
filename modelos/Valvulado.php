<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';
        class Valvulado{


            //metodo para insetar un registro de confecciones 
            public function insertar($turno, $folio, $orden,$maquina,$idoperador, $nombre_op, $telares,
            $bopp,$laminado,$impresion,$confeccion,$almacen,$telares,$valvulado
            ,$valculado,$bopp,$laminado,$impresion,$confeccion,$almacenTela,$idinspector,$nombre_insp
            $observaciones){
            date_default_timezone_set('America/Mexico_City');
		    $fechacreada=date('Y-m-d H:i:s');
            $sql = "INSERT INTO tb_desp_confeccion_sapmat (turno, folio_hit, orden, maquina, idoperador, nombre_op, seg_telares_pza,
            seg_bopp_pza, seg_laminado_pza, seg_impresion_pza, seg_confeccion_pza, seg_almacen_tela_pza,
            des_telares_kg, des_bopp_kg, des_laminado_kg, des_impresion_kg, des_confeccion_kg, des_almacen_tela_kg,
            idinspector, nombre_insp, ob) VALUES ($turno, $fechacreada,'$folio','$orden',
             '$maquina',1, '$nombre_op','$telares','$bopp','$laminado','$impresion','$confeccion',
             '$almacen','$telares','$bopp','$laminado','$impresion','$confeccion',
             '$almacenTela','$inspector','$nombre_insp','$observaciones')" 
            }

            if($_REQUEST['empid']) {
                $sql = "SELECT id, nombre FROM operadores WHERE id='".$_REQUEST['empid']."'";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                
                $data = array();
                while( $rows = mysqli_fetch_assoc($resultset) ) {
                    $data = $rows;
                }
                echo json_encode($data);
            } else {
                echo 0;	
            }
        }

















?>