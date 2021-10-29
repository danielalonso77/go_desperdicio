<?php

// requerimos la conexion a la bd
require 'Conexion.php';
//iniciamos una sesion
session_start();

//isset del login 
if(isset($_POST['login'])){

    //creamos la variables de llegada
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //verificamos que los campos no esten vacios
    if($usuario == '' || $password == ''){
        print_r($password,$usuario);
        echo "<script> alert('Error: usuario y/o clave vacios!!');   </script>";
    }else{
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password'";
        print_r($sql);
        if (!$consulta = $conexion->query($sql)){
            echo "<script> alert('Error('')') </script>";
        }else{
            $rows = mysqli_num_rows($consulta);

            if($rows == 0){
                echo "<script> alert('Error: la contraseña o el usuario con incorrectos!!') ;</script>";
                header("Location: ../vistas/index.php");
            }else{
                header("Location: ../vistas/principal.php");
                echo "<script> alert('Acceso Correcto!!') ;</script>";
            }

        }
        
    }


}





?>
