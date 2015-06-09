<?php

$conexion = new PDO('sqlite:bibliotecacd.sqlite') or die('Ha sido imposible establecer la conexion');

  $consulta = $conexion->exec("UPDATE discos SET artista = 'Queen' WHERE artista = 'Queeen'");

$resultado = $conexion->query($consulta);


?>