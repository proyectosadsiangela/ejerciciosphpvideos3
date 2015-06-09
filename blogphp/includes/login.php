<?php
session_start();

$usuarioenviado = $_POST['usuario'];
$contrasenaenviada = $_POST['contrasena'];

$conexion = new PDO('../sqlite:database/blogs.sqlite');

$peticion = "SELECT * FROM WHERE usuario='".$usuarioenviado."'";

$ejecuto = $conexion->query($peticion);

foreach ($ejecuto as $fila){
  if ($usuarioenviado = $fila['usuario'] & $contrasenaenviada = $fila['contrasena']) {

     $_SESSION['login'] = "yes";

echo'
    <html>
      <head>
          <meta http-equiv="REFRESH" content="0;url=../index.php"
          </head>
    </html>
';
  	 } else{


     $_SESSION['login'] = "no";

echo'
    <html>
      <head>
          <meta http-equiv="REFRESH" content="0;url=../index.php"
          </head>
    </html>
';

  	  }
  	}

echo'
    <html>
      <head>
          <meta http-equiv="REFRESH" content="0;url=../index.php"
          </head>
    </html>
';

?>