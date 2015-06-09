<?php

$utcaticulo = $_GET['utc'];

$conexion = new PDO('sqlite:database/blogs.sqlite');

$peticion = "SELECT * FROM posts WHERE utc='$utcarticulo' ORDER BY utc DESC LIMIT 1";
$ejecucion = $conexion->query($peticion);

foreach ($ejecuto as $fila){
  echo"	<article>
            		<div id='logov2b' style='background:url(\"photo/angelabarbosa.jpg\");'></div>
                    <time>".$fila['imagen']."-".$fila['mes']."-".$fila['dia']."/time>
                      <h3>".$fila['titulo']."</h3>
                      <h4>".$fila['subtitulo']."</h4>
                      <p>".$fila['texto']."</p>
            	<br/><a href='includes/eliminarpost.php?utc=".$fila['utc']."' >Eliminar</a><br/>
            	<a href='index.php?titulomod=".$fila['titulo']."&subtitulomod=".$fila['subtitu']."&textomod=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'> Modificar </a><br/>
            	</article>
    ";        	
}
$conexion=Null;

?>

<article>
            		<div id="logov2b"></div>
                  <!--  <time>2011-01-31</time>-->
                  <form action ="includes/actualizarpost.php" method="post">
                      <h3>Titulo del post:<input type="text" name="titulopostactualizar" value="<?php echo $titulomod?>"></h3>
                      <h4>Subtitulo del post<input type="text" name="subtitulopostactualizar" value="<?php echo $subtitulomod?>"></h4>
                      <p>Contenido:<input type="text" name="contenidopostactualizar" value="<?php echo $textomod?>"></p>
                      <input type="hidden" name="utcact" value="<?php echo $utcmod; ?>">
                  <input type="submit">
                  </form>
</article>