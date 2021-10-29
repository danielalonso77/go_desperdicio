<?php
    //se incluye la base de datos de la base de datos
    require '../config/Conexion.php';
        class Telares{


            //metodo para insetar un registro de confecciones 
            public function insertar( $idoperador,$operador,$cinta,$pelatubo,$arranque,
            $tela, $tela_polietileno, $inspector, $observaciones){
              date_default_timezone_set('America/Mexico_City');
		          $fechacreada=date('Y-m-d H:i:s');
              $sql = "INSERT INTO tb_desp_telares_sapmat (idoperador, nombre_op, cinta, pelatubo, arranque
              tela, tela_polietileno, idinspector, nombre_insp, observaciones) VALUES ('$idoperador','$operador','$cinta','$pelatubo','$arranque',
            '$tela', '$tela_polietileno', '$inspector', '$observaciones')"   
            }
        }
?>










