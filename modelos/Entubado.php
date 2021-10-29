<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';
    
        class Entubado{

     
            //metodo para insetar un registro de confecciones 
            public function insertar($id, $fecha, $extruder, $idoperador, $nombre_op, $cinta,
            $pelicula,$bobina,$polietileno,$plasta,
            $idinspector, $nombre_insp, $observaciones){
            date_default_timezone_set('America/Mexico_City');
		    $fechacreada=date('Y-m-d H:i:s');
            $sql = "INSERT INTO `tb_desp_entubado_sapmat` (`id`, `fecha`, `folio_hit`, `turno`, 
            `idoperador`, `nombre_op`, `desp_bopp`, `desp_plasta`, `idinspector`, `nombre_insp`, `observaciones`) 
            VALUES ('', '2021-10-29 23:59:52.000000', '', '', '', '', '', '', '', '', '')";  
            return ejecutarConsulta($sql);
            }
          }
        