<?php
session_start();

$codigo = $_SESSION['permisos'];
if($codigo == 1){
echo "Tu usuario es:".$_SESSION['usuario']."<br>"."Tu contrasena es:".$_SESSION['contrasena'];
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
//Crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//Establecer una consulta
$consulta = "SELECT * FROM usuarios ";
//Ejecutar la consulta
$resultado=$conexion->exec($consulta);
//Imprimir la consulta
echo "
<table border=1 width=100%>
<tr>
<td>Usuario </td>
<td>Contrasena </td>
<td>Nombre </td>
<td>Apellido </td>
<td>Edad </td>
<td></td>
<td></td>
</tr>
";

foreach ($conexion->query($consulta) as $fila){ 	
	echo "<tr><td>".$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['edad']."</td><td><a href='eliminarusuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Eliminar</a></td><td><a href='formularioactualizarusuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>
    Actualizar</a></td></tr>
	";
}

//Añadir un registro
echo "
<tr>
    <form action = 'crearusuario.php' method='POST'>
    <td><input type='text' name='usuario'></td>
    <td><input type='text' name='contrasena'></td>
    <td><input type='text' name='nombre'></td>
     <td><input type='text' name= 'apellido'></td>
     <td><input type='text' name= 'edad'></td>
     <td><input type='submit'></td><td></td></tr>

</tr>
";
echo "</table>";
//cerrar conexion
$conexion=null;
}else {echo "Tu no eres administrador";}
?>