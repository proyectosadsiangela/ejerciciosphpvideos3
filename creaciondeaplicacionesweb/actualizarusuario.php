<?php
session_start();
//conexion
$conexion = new PDO('sqlite:favoritos.sqlite');
//variables de sesion
$usuarioantiguo = $_SESSION['usuario'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$tituloantiguo = $_SESSION['titulo'];

$consulta = "UPDATE usuarios SET usuario='".$usuario."', contrasena='".$contrasena."', nombre='".$nombre."', apellido='".$apellido."',edad='".$edad."' WHERE usuario='".$usuarioantiguo."'";

//ejecuto la consulta
$resultado=$conexion->exec($consulta);
//cerrar conexion
$conexion=null;
echo'
   <html>
         <head>
               <meta http-equiv="REFRESH" content="0;url=gestiondeusuarios.php">
         </head>

   </html>
';
?>