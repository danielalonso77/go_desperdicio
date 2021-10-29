<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';
        class Laminado{


            //metodo para insetar un registro de confecciones 
            public function insertar($foliohit,$operador,$metros,$metros_corte_empalme, $desperdicio,
            $deperdicio_almacen_tela, $plasta, $inspector, $observaciones){
              date_default_timezone_set('America/Mexico_City');
		          $fechacreada=date('Y-m-d H:i:s');
              $sql = "INSERT INTO tb_desp_laminado_sapmat (foliohit, idoperador, nombre_op, m_corte_empalme, desperdicio
              , deperdicio_almac, plasta, idinspector, nombre_insp, observaciones) VALUES ('$foliohit','$operador',
              '$metros','$metros_corte_empalme', '$desperdicio',
            '$deperdicio_almacen_tela', '$plasta', '$inspector', '$observaciones') "   
            }
        }











