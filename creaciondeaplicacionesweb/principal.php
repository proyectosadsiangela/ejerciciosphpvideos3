<?php
include("log.php");

echo "Tu usuario es:".$_SESSION['usuario']."<br>"."Tu contrasena es:".$_SESSION['contrasena'];
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "<br/> Pulsa <a href='unlog.php'>AQUI</a> para cerrar tu sesion<br/>";


//Crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//Establecer una consulta
$consulta = "SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contrasena = '".$_SESSION['contrasena']."';";
//Ejecutar la consulta
$resultado=$conexion->exec($consulta);
//Imprimir la consulta
echo "
<table border=1 width=100%>
<tr>
<td>Titulo </td>
<td>Direccion </td>
<td>Categoria </td>
<td>Comentario </td>
<td>Valoracion </td>
<td></td>
<td></td>
</tr>
";

foreach ($conexion->query($consulta) as $fila){ 	
	echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&Categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Eliminar</a></td><td><a href='formularioactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&Categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>
    Actualizar</a></td></tr>
	";
}
//Añadir un registro
echo "
<tr>
    <form action = 'crearfavorito.php' method='POST'>
    <td><input type='text' name='titulo'></td>
    <td><input type='text' name='direccion'></td>
    <td><select name='categoria'>
        <option value='salud'>Salud</option>
        <option value='trabajo'>Trabajo</option>
        <option value='hobby'>Hobby</option>
        <option value='personal'>Personal</option>
        <option value='otros'>Otros</option>
     </td>
     <td><input type='text' name='comentario'></td>
     <td><input type='text' name= 'valoracion'></td>
     <td><input type='submit'></td><td></td></tr>

</tr>
";
echo "</table>";
//cerrar conexion
$conexion=null;
//----------------------------------Socializo-----------------------------------------

function muestraCategoria($damecategoria){

echo "Algunos links de la categoria ".$damecategoria." que quizas te pueden interesar";
$conexion = new PDO('sqlite:favoritos.sqlite');
$consulta ="SELECT * FROM favoritos WHERE usuario != '".$_SESSION['usuario']."' AND categoria='".$damecategoria."' ORDER BY RANDOM() LIMIT 3";
//ejecutar consulta
$resultado=$conexion->query($consulta);;
echo "
<table border=1 width=100%>
<tr>
<td>Titulo </td>
<td>Direccion </td>
<td>Categoria </td>consulta
<td>Comentario </td>
<td>Valoracion </td>
<td></td>
<td></td>
</tr>
";
foreach ($conexion->query($consulta) as $fila){     
    echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td></tr>";
}
echo "</table>";
$conexion=null;
}
muestracategoria("salud");
muestracategoria("trabajo");
muestracategoria("personal");
muestracategoria("hobby");
muestracategoria("otros");
$conexion=null;
?>