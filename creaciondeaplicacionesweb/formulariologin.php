<html>
    <body>
        <table border=1 width="100%">
        <tr> 
           <td>
    	<form action="login.php" method="post">
    	<input type="text" name="usuario" value="Introduce tu nombre" width=50%>
    	  	</td>
    	  	</tr>
    	    <tr>
    	    <td>
    	    

    	<input type="text" name="contrasena" value="introduce tu contrasena" width=50%>
        </td>
           </tr>
           <tr>
           <td>
    	<input type="submit">
    	   </tr>
    	</form>
        </table>
        Si no eres usuario todavia? pulsa<a href="formularioaltausuario.php">AQUI</a>
    </body>

</html>
<?php
echo "Algunos links que quizas te pueden interesar";
$conexion = new PDO('sqlite:favoritos.sqlite');
$consulta ="SELECT * FROM favoritos  ORDER BY RANDOM() LIMIT 3";
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

?>