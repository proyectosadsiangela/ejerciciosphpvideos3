<?php
session_start();
//crear variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//conexion
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');
//consulta
$consulta= "INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')
";
//ejecuto la consulta
$conexion=$conexion->exec($consulta);
//cerrar conexion
$conexion=null;
//volver
echo '
<html>
     <head>
     <meta http-equiv="REFRESH" content="0;url=principal.php">
     </head>
</html>';


?>