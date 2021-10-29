<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';

    echo 'hola';
        class Extruder{

            
            //metodo para insetar un registro de confecciones 
            public function insertar($id, $fecha, $extruder, $turno, $idoperador, 
            $nombre_op, $cinta, $pelicula, $bobina, $polietileno, $plasta, $idinspector, 
            $nombre_insp, $observaciones){
            date_default_timezone_set('America/Mexico_City');
		        $fechacreada=date('Y-m-d H:i:s');
            $sql = "INSERT INTO `tb_desp_extruder_sapmat` (`id`, `fecha`, `extruder`,
             `turno`, `idoperador`, `nombre_op`,
             `cinta`, `pelicula`, `bobina`, `polietileno`, `plasta`, `idinspector`, 
             `nombre_insp`, `observaciones`) 
             VALUES (null, '$fechacreada', '', '', 1, '', '', '', '', '', '', 1, '', '')";
             return ejecutarConsulta($sql);
            }
        }











