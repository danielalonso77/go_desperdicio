<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Usuario{
	

//metodo insertar regiustro
	public function insertar($nombre,$apellidos,$login,$idtipousuario,$clavehash,$imagen,$usuariocreado,$planta){
		date_default_timezone_set('America/Mexico_City');
		$fechacreado=date('Y-m-d H:i:s');

		$sql="INSERT INTO usuarios (nombre,apellidos,login,idtipousuario,password,imagen,estado,fechacreado,usuariocreado,planta) VALUES ('$nombre','$apellidos','$login','$idtipousuario','$clavehash','$imagen','1','$fechacreado','$usuariocreado','$planta')";
		return ejecutarConsulta($sql);

	}

	public function editar($idusuario,$nombre,$apellidos,$login,$idtipousuario,$imagen,$usuariocreado,$planta){
		$sql="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',login='$login',idtipousuario='$idtipousuario',imagen='$imagen' ,usuariocreado='$usuariocreado',planta='$planta'    
		WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);

	}
	public function editar_clave($idusuario,$clavehash){
		$sql="UPDATE usuarios SET password='$clavehash' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}
	public function mostrar_clave($idusuario){
		$sql="SELECT idusuario, password FROM usuarios WHERE idusuario='$idusuario'";
		return ejecutarConsultaSimpleFila($sql);
	}
	public function desactivar($idusuario){
		$sql="UPDATE usuarios SET estado='0' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}
	public function activar($idusuario){
		$sql="UPDATE usuarios SET estado='1' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

//metodo para mostrar registros
	public function mostrar($idusuario){
		$sql="SELECT * FROM usuarios WHERE idusuario='$idusuario'";
		return ejecutarConsultaSimpleFila($sql);
	}

//listar registros
	public function listar(){
		$sql="SELECT * FROM usuarios";
		return ejecutarConsulta($sql);
	}

	public function cantidad_usuario(){
		$sql="SELECT count(*) nombre FROM usuarios";
		return ejecutarConsulta($sql);
	}

//Función para verificar el acceso al sistema
	public function verificar($usuario,$contraseña)
	{
		$sql="SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'"; 
		return ejecutarConsulta($sql);  
	}
}

?>
