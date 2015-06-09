<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");

if(!$conexion){
	
	die('No se pudo conectar:'.mysql_error());
}

if(mysql_query("CREATE DATABASE agenda",$conexion)){

   echo "Se ha creado con exito la base de datos";
}
else{

	echo "No se ha podido crear la base de datos por el siguiente error: ".mysql_error();
}

//preparo una peticion.
mysql_select_db("agenda",$conexion);
//creamos una variable llamada sql.
$sql="CREATE TABLE miagenda
( 
personaID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";

//ejecuto una peticion.
mysql_query($sql,$conexion); // se ejecuta el comando o query.
mysql_close($conexion); //cerrar conexion a la base de datos.
?>