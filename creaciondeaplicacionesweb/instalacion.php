<?php
//crear una tabla de favoritos--------------
//establecer una conexion-------------
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');
//crear tabla---------------
$consulta=
'CREATE TABLE favoritos(
usuario char(40) Not Null,
contrasena char(40)Not Null,
titulo char(40) Not Null,
direccion char(100) Not Null,
categoria char(40),
comentario char(200),
valoracion int 
	)';

//insertar contenido en la tabla---------------
$conexion=$conexion->exec($consulta);

//cerrar la conexion---------

$conexion = null;

//contenido de prueba para la tabla de favoritos
//establecer conexion
$conexion = $conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//preparar consulta
$consulta ="

INSERT INTO favoritos VALUES('jocarsa','jocarsa','Google','http://wwww.google.com','tecnologia','Este es un buscador muy famoso','10');
INSERT INTO favoritos VALUES('jocarsa','jocarsa','JOCARSA','http://wwww.jocarsa.com','tecnologia','Esta es mi pagina','10')";

// insertar la consulta
           $conexion=$conexion->exec($consulta);
//cerrar
           $conexion = null;
//CREAR UNA TABLA DE USUARIOS---------
//conexion
 $conexion = $conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//creamos tabla usuarios
 $consulta=
'CREATE TABLE usuarios(
usuario char(40) Not Null,
contrasena char(40)Not Null,
nombre char(40) Not Null,
apellido char(40) Not Null,
edad int,
permisos int
)';

//insertar contenido a la tabla
 $conexion=$conexion->exec($consulta);

 //cerrar conexion
 $conexion = null;
 //contenido de prueba para la tabla de favoritos
//establecer conexion
$conexion = $conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//preparar consulta
$consulta=" INSERT INTO favoritos VALUES ('jocarsa','jocarsa','Jose Vicente','Carratela',32,1)";
          

// insertar la consulta
           $conexion=$conexion->exec($consulta);
//cerrar
           $conexion = null;

//tabla de logs

           //CREAR UNA TABLA DE logs---------
//conexion 
 $conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//creamos tabla usuarios
 $consulta=
'CREATE TABLE logs(
utc int,
anio int,
mes int,
dia int,
hora int,
minuto int,
segundos int,
ip char(50),
navegador char(100),
usuario char(40),
contrasena char(40)

)';

//insertar contenido a la tabla
 $result=$conexion->exec($consulta);

var_dump($result);

 //cerrar conexion
 $conexion = null;
 //contenido de prueba para la tabla de favoritos
//establecer conexion
$conexion  = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//preparar consulta
$consulta=" INSERT INTO logs VALUES (000000000,2011,02,07,21,03,00,'127.0.0.1','chrome','jocarsa','jocarsa')";
          

// insertar la consulta
           $result=$conexion->exec($consulta);
//cerrar
           $conexion = null;


?>