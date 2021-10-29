<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';
        class Impresion{


            //metodo para insetar un registro de confecciones 
            public function insertar($op, $foliohit, $maquina, $idoperador, 
            $nombre_op, $corte_metros, $corte_kg, $desperdicio, $desperdicio_alm_tela,
            $idinspector, $nombre_insp,  $observaciones){
              date_default_timezone_set('America/Mexico_City');
		          $fechacreada=date('Y-m-d H:i:s');
              $sql = "INSERT INTO tb_desp_impresion_sapmat (op, foliohit, maquina, idoperador,
              nombre_op, corte_metros, corte_kg, desperdicio, desperdicio_alm_tela, idinspector,
              nombre_insp, nombre_insp, observaciones) VALUES ('$op', '$foliohit', '$maquina', '$idoperador', 
            '$nombre_op', '$corte_metros', '$corte_kg', '$desperdicio', '$desperdicio_alm_tela',
            '$idinspector', '$nombre_insp',  '$observaciones')"   
            }
        }











?>