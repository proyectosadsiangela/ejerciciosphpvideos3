<?php

session_start();
$conexion = new PDO('sqlite:favoritos.sqlite'); 

//crear variables
$usuario = $_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];


$consulta = "DELETE FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre = '".$nombre."' AND apellido='".$apellido ."' AND edad ='".$edad."'";
//ejecuto la consulta
$resultado=$conexion->query($consulta);
echo'
<html>
     <head>
         <meta http-equiv="REFRESH" content="0;url=gestiondeusuarios.php">
     </head>
</html>
';
$conexion=null;
?>