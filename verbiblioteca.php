<?php

$conexion = new PDO('sqlite:bibliotecacd.sqlite') or die('Ha sido imposible establecer la conexion');

$consulta = "SELECT * FROM discos;";

foreach ($conexion->query($consulta) as $fila){
    	print $fila['artista']."".$fila['disco']."".$fila['anio']."<br>";
}

$conexion = null;
?>