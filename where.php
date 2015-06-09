<?php
//realizamos la conexion
$conexion = mysql_connect("localhost","video2brain","video2brain");
//estructura de control por si falla
if(!$conexion){
	
	die('No se pudo conectar:'.mysql_error());
}

mysql_select_db("agenda",$conexion);
$peticion = mysql_query("SELECT * FROM miagenda WHERE Nombre='Esteban'");
while ($fila=mysql_fetch_array($peticion)) {
	   
	   echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".$fila['Telefono'];
	   echo "<br>";
}
mysql_close($conexion);
?>