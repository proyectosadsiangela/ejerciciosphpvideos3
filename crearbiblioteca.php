<?php

$conexion = new PDO('sqlite:bibliotecacd.sqlite') or die('Ha sido imposible establecer la conexion');

$consulta= 'CREATE TABLE discos(
artista char(20) NOT NUll,
disco char(40),
anio integer
)';

$conexion=$conexion->exec($consulta);

?>