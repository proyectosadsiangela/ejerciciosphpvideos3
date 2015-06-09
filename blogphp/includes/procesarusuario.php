<?php
session_start();
$contador = 0;
//recibo variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidouno = $_POST['apellidouno'];
$apellidodos = $_POST['apellidodos'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$webpersonal = $_POST['webpersonal'];
$email = $_POST['email'];

//compruebo si el usuario existe
$conexion = new PDO('../sqlite:database/blogs.sqlite');
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($resultado);

foreach ($consulta as $fila) {
	
	if ($fila['usuario'] == $usuario) {
		$contador++;
	}else{}
}
$conexion = Null;

//creo inserto un nuevo usuario
if ($contador == 0) {
	$conexion = new PDO('../sqlite:database/blogs.sqlite');
    $consulta = "INSERT INTO usuarios VALUES('".$usuario."','".$contrasena."','".$nombre."','".$apellidouno."','".$apellidodos."','".$titulo."','".$descripcion."','".$foto."','".$webpersonal."','".$email."',3)";

    $ejecuto = $conexion->exec($consulta);
    $conexion = Null;

echo '
  <html>
      <head>
          <meta http-equiv="REFRESH" content="0;url=../index.php"
          </head>
    </html>
';
}
else{
	echo 'El usuario ya existe';
}

?>