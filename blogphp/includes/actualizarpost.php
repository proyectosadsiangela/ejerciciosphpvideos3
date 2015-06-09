<?php

$utcact = $_POST['utcact'];
$titulo = $_POST['contenidopostactualizar'];
$subtitulo = $_POST['subtitulopostactualizar'];
$texto = $_POST['textopostactualizar'];

$conexion = new PDO('../sqlite:database/blogs.sqlite');

$consulta = "UPDATE posts SET titulo ='".$titulo."',subtitulo='".$subtitulo."',texto='".$texto."' WHERE utc='".$utcact."' ";

$resultado = $conexion->exec($consulta);

$conexion = Null;


echo'
    <html>
      <head>
          <meta http-equiv="REFRESH" content="0;url=../index.php"
          </head>
    </html>
';

?>