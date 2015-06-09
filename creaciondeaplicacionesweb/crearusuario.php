<?php
session_start();

$contador = 0;

//obtener las variables del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

//comprobar si el usuario existe conectandome a la base de datos

$conexion = NULL;

$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta = "SELECT * FROM usuarios";
$resultado =$conexion->query($consulta);

$conexion = NULL;



foreach ($resultado as $fila){ 	

if ($fila['usuario'] == $usuario) {
	$contador++;
}

if ($contador == 0) {

//consulta
/*permisos de usuario:
1=administrador
2=controlador
3=usuario registrado
4=usuario invitado
*/

$conexion2 = NULL;
$conexion2 = new PDO('sqlite:favoritos.sqlite');

$consulta= "INSERT INTO usuarios VALUES('".$usuario."','".$contrasena."','".$nombre."','".$apellido."','".$edad."',3)";
$resultado=$conexion2->exec($consulta);

$conexion2 = NULL;

echo'
<html>
     <head>
         <meta http-equiv="REFRESH" content="0;url=gestiondeusuarios.php">
     </head>
</html>
';
	
}
else{echo "El nombre de usuario que has elegido ya existe. Elige otro";}
}

?>