<?php 
$conexion = new PDO('sqlite:database/blogs.sqlite');

$peticion = "SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC LIMIT 2";
$ejecucion = $conexion->query($peticion);

foreach ($ejecuto as $fila){
  echo"	<article>
            		<div id='logov2b' style='background:url(\"photo/angelabarbosa.jpg\");'></div>
                    <time>".$fila['imagen']."-".$fila['mes']."-".$fila['dia']."/time>
                      <h3>".$fila['titulo']."</h3>
                      <h4>".$fila['subtitulo']."</h4>
                      <p>".$fila['texto']."</p>
            	<br/>
            ";
            if($_SESSION['login'] == "yes"){

  echo " <a href='includes/eliminarpost.php?utc=".$fila['utc']."' >Eliminar</a>";echo "<br/>";}else{}
 

  if($_SESSION['login'] == "yes"){
   echo "<a href='index.php?titulomod=".$fila['titulo']."&subtitulomod=".$fila['subtitu']."&textomod=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'> Modificar </a>";echo "<br/>";}else{}

   
    echo "</article>
    ";        	
}
$conexion=Null;
?>

