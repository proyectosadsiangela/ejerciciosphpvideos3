<?php

$conexion = new PDO('sqlite:bibliotecacd.sqlite') or die('Ha sido imposible establecer la conexion');

  $consulta = $conexion->exec("DELETE FROM discos WHERE artista = 'Queen'");

$resultado = $conexion->query($consulta);


?>