<?php
session_start();
//conexion
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');
//variables de sesion
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

$tituloantiguo = $_SESSION['titulo'];

$consulta = "UPDATE favoritos SET titulo='".$titulo."', direccion='".$direccion."', categoria='".$categoria."', comentario='".$comentario."',valoracion='".$valoracion."' WHERE titulo='".$tituloantiguo."'";

//ejecuto la consulta
$resultado=$conexion->exec($consulta);
//cerrar conexion
$conexion=null;
echo'
   <html>
         <head>
               <meta http-equiv="REFRESH" content="0;url=principal.php">
         </head>

   </html>
';
?>