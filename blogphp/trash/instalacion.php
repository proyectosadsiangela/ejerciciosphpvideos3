<?php
//*******************Crear la tabla de usuarios****************************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 
//peticion
$consulta = "CREATE TABLE usuarios(
usuario char(40) Not Null,
contrasena char(40) Not Null,
nombre char(40),
apellidouno char(40),
apellidodos char(40),
titulo char(120),
descripcion char(1500),
foto char(80),
webpersonal char(80),
email char(80),
permisos int
)";
//ejecutar
$resultado = $conexion -> exec($consulta);
//cerrar conexion
$conexion = Null;

//********************Insertaremos contenido de prueba de la tabla usuarios****************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 
//peticion
$consulta = "INSERT INTO usuarios VALUES('jocarsa','jocarsa','Jose Vicente','Carratala','Sanchez','Creativo Multimedia','Descripcion','josevicentecarratala','http//www.jocarsa.com','info@jocarsa.com',1)";
//ejecutar
$resultado = $conexion -> exec($consulta);

//cerrar conexion
$conexion = Null;

//*******************Crear la tabla configuracion de usuarios********************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 

//peticion
$consulta = "CREATE TABLE configusuarios(
usuario char(40) Not Null,
piel char(40),
respuestas char(40)
)";
//ejecutar
$resultado = $conexion -> exec($consulta);

//cerrar conexion
$conexion = Null;

//*********************Insertaremos contenido de prueba en la configuracion de prueba*************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 

//peticion
$consulta = "INSERT INTO configusuarios VALUES('jocarsa','default','si')";

//ejecutar
$resultado = $conexion -> exec($consulta);
//cerrar conexion
$conexion = Null;
//********************Crear la tabla post***************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 
//peticion
$consulta = "CREATE TABLE posts(
utc int Not Null,
anio int,
mes int,
dia int,
hora int,
minuto int,
segundo int,
usuario char(80),
titulo char(120),
subtitulo char(200),
icono char(80),
texto char(4000),
imagen char(200),
video char(200),
sonido char(200)
)";

//ejecutar
$resultado = $conexion -> exec($consulta);
//cerrar conexion
$conexion = Null;

//--------------Insertamos contenido de prueba en la tabla post-----------------------------
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 

//peticion
$consulta = "INSERT INTO posts VALUES('00000000,2011,02,10,11,55,00,'jocarsa','Este es mi primer post','Bienvenido a tu blog','josevicente','Este es el primer post', 'imagen','video','solnido')";

//ejecutar
$resultado = $conexion -> exec($consulta);

//cerrar conexion
$conexion = Null;
//******************Crear la tabla logs********************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 
//peticion
$consulta = "CREATE TABLE logs(
utc int Not Null,
anio int,
mes int,
dia int,
hora int,
minuto int,
segundo int,
ip char(80),
navegador char(300),
usuario char(80),
operacion char(80)
)";

//ejecutar
$resultado = $conexion -> exec($consulta);
//cerrar conexion
$conexion = Null;


//****************Insertaremos contenido de prueba en la tabla logs*****************************
//conexion
$conexion = new PDO('sqlite:database/blogs.sqlite') or die('Ha sido imposible establecer la conexion'); 

//peticion
$consulta = "INSERT INTO logs VALUES('00000000,2011,02,10,11,55,00,'127.0.0.1','Chrome','jocarsa','crear')";

//ejecutar
$resultado = $conexion -> exec($consulta);

//cerrar conexion
$conexion = Null;
?>