<aside id="post">
             <h5>posts previos</h5>
                 <ul>

                 <?php

                 $conexion = new PDO('sqlite:database/blogs.sqlite');

                 $peticion = "SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC LIMIT 20 OFFSET 3";

                 $ejecucion = $conexion->query($peticion);
 
                 foreach ($peticion as $fila){ 

                    echo "<li><a href='index.php?articulo=yes&utc=".$fila['utc']."'><time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>".$fila['titulo']."</a></li>";

                 }
                 
                 $conexion = Null;
                 ?>
                </ul>
            </aside>