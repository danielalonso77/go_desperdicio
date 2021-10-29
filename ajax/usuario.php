<?php 
session_start();
require_once "../modelos/Usuario.php";

$usuario=new Usuario();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$password=isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$perfil=isset($_POST["perfil"])? limpiarCadena($_POST["perfil"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";
$sucursal=isset($_POST["sucursal"])? limpiarCadena($_POST["sucursal"]):"";


switch ($_GET["op"]) {
   
  case 'guardaryeditar':

  if (!file_exists($_FILES['imagen']['tmp_name'])|| !is_uploaded_file($_FILES['imagen']['tmp_name']))  
  {
    $imagen=$_POST["imagenactual"];
  }else
  {

    $ext=explode(".", $_FILES["imagen"]["name"]);
    if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
    {

      $imagen = round(microtime(true)).'.'. end($ext);
      move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/usuarios/" . $imagen);
    }
  }

    //Hash SHA256 para la contraseña
  $clavehash=$password;

  if (empty($idusuario)) {
    $idusuario=$_SESSION["idusuario"];
    $rspta=$usuario->insertar($nombre,$usuarios,$password,$perfil,$estado,$sucursal);
    echo $rspta;
  }
  else {
    $rspta=$usuario->editar($id,$nombre,$usuarios,$password,$perfil,$estado,$sucursal);
    echo $rspta;
  }
  break;
  

  case 'desactivar':
  $rspta=$usuario->desactivar($idusuario);
  echo $rspta;
  break;

  case 'activar':
  $rspta=$usuario->activar($idusuario);
  echo $rspta;
  break;
  
  case 'mostrar':
  $rspta=$usuario->mostrar($idusuario);
  echo json_encode($rspta);
  break;

  case 'editar_clave':
  $clavehash=$clavec;

  $rspta=$usuario->editar_clave($idusuarioc,$clavehash);
  echo $rspta ? "Password actualizado correctamente" : "No se pudo actualizar el password";
  break;

  case 'mostrar_clave':
  $rspta=$usuario->mostrar_clave($idusuario);
  echo json_encode($rspta);
  break;

  case 'verificar':
    //validar si el usuario tiene acceso al sistema
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];

    //Hash SHA256 en la contraseña
  $clavehash=$clavea;
  
  $rspta=$usuario->verificar($usuario, $password);

  $fetch=$rspta->fetch_object();

  if (isset($fetch)) 
  {
      # Declaramos la variables de sesion
    $_SESSION['id']=$fetch->idusuario;
    $id=$fetch->idusuario;
    $_SESSION['nombre']=$fetch->nombre;

    require "../config/Conexion.php";

    $sql="UPDATE usuarios SET iteracion='1' WHERE idusuario='$id'";
    echo $sql; 
    ejecutarConsulta($sql);       

  }

  echo json_encode($fetch);

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