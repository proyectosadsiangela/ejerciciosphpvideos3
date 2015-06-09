<?php

$codigoutc = $GET['utc'];

$conexion = new PDO('../sqlite:/database/blogs.sqlite');

$consulta = "DELETE FROM post WHERE utc ='".$codigoutc."'";

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