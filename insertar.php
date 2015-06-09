<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");

if(!$conexion){
	
	die('No se pudo conectar:'.mysql_error());
}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda(Nombre,Apellido,Edad,Telefono) VALUES('Angela','Barbosa',22,'3205434688')");
mysql_query("INSERT INTO miagenda(Nombre,Apellido,Edad,Telefono) VALUES('Esteban','Martinez',8,'3113425467')");

mysql_close($conexion); //cerrar conexion a la base de datos.
?>