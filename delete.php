<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");

if(!$conexion){
	
	die('No se pudo conectar:'.mysql_error());
}
mysql_select_db("agenda",$conexion);

mysql_query("DELETE FROM miagenda WHERE Nombre='Martha' AND Apellido= 'Lopez'");

mysql_close($conexion);
?>