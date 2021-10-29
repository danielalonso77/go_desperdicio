<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';

        class Confeccion{

            //metodo para insetar un registro de confecciones 
            public function insertar($id, $fecha, $turno, $folio_hit, $orden, $maquina, 
            $idoperador, $nombre_op, $seg_telares_pza, $seg_bopp_pza, $seg_laminado_pza, $seg_impresion_pza, 
            $seg_confeccion_pza, $seg_almacen_tela_pza, $des_telares_kg, $des_bopp_kg, $des_laminado_kg, 
            $des_impresion_kg, $des_confeccion_kg, $des_almacen_tela_kg, $idinspector, $nombre_insp, $ob){
                    date_default_timezone_set('America/Mexico_City');
		            $fechacreada=date('Y-m-d H:i:s');
                    $sql="INSERT INTO `tb_desp_confeccion_sapmat` (`id`, `fecha`, `turno`, `folio_hit`, `orden`, `maquina`, 
                    `idoperador`, `nombre_op`, `seg_telares_pza`, `seg_bopp_pza`, `seg_laminado_pza`, `seg_impresion_pza`, 
                    `seg_confeccion_pza`, `seg_almacen_tela_pza`, `des_telares_kg`, `des_bopp_kg`, `des_laminado_kg`, 
                    `des_impresion_kg`, `des_confeccion_kg`, `des_almacen_tela_kg`, `idinspector`, `nombre_insp`, `ob`) 
                    VALUES ('', '$fechacreada', '$turno', '$folio_hit', '$orden', '$maquina', 1, '$nombre_op', '$seg_telares_pza',
                     '$seg_bopp_pza', '$seg_laminado_pza', '$seg_impresion_pza', '$seg_confeccion_pza', '$seg_almacen_tela_pza',
                      ' $des_telares_kg', '$des_bopp_kg', '$des_laminado_kg', '$des_impresion_kg', '$des_confeccion_kg', 
                      '$des_almacen_tela_kg', 1, '$nombre_insp', '$ob')";
                    return ejecutarConsulta($sql); 
                    
            }

            
        }

?>