<?php
session_start();

$utc = date('U');
$anio = date('y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$usuariolog = $_SESSION['usuario'];
$contrasenalog = $_SESSION['contrasena'];

@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');
//consulta
$consulta= "INSERT INTO logs VALUES ('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog')
";
//ejecuto la consulta
$conexion=$conexion->exec($consulta);
//cerrar conexion
$conexion=null;