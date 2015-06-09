<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");

if(!$conexion){
	
	die('No se pudo conectar:'.mysql_error());
}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda(Nombre,Apellido,Edad,Telefono) VALUES('Martha','Lopez',14,'5400001')");
mysql_close($conexion); //cerrar conexion a la base de datos.
?>