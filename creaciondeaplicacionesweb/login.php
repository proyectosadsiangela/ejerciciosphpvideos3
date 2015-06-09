<?php
session_start();
//obtener variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena']; 
//conexion
$conexion = new PDO('sqlite:favoritos.sqlite');

//consulta
$consulta = "SELECT * FROM usuarios";

//ejecutar consulta
$resultado=$conexion->query($consulta);
//repasar los resultados
foreach ($resultado as $fila){ 
$usuariobasedatos=$fila['usuario'];
$contrasenabasedatos=$fila['contrasena'];
$permisosenbase=$fila['permisos'];
if (($usuario == $usuariobasedatos) && ($contrasena == $contrasenabasedatos)) {
	//si el resultado es positivo
		$_SESSION['usuario']= $usuario;
		$_SESSION['contrasena']=$contrasena;
        $_SESSION['permisos']= $permisosenbase;
		echo'
            <html>
               <head>
                    <meta http-equiv="REFRESH" content="0;url=principal.php">
                 </head> 
             </html>  
		';
	}	
}

//si el resultado es negativo
//cerramos conexion
$conexion=null;
?>