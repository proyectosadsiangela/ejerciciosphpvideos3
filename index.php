<?php session_start();

if (isset($_SESSION['usuariotemporal'])) {
	$_SESSION['usuariotemporal'] = $_GET['u'];
}else{$_SESSION['usuariotemporal'] = "jocarsa";}


include "includes/variablesusuario.php";
 
 if (isset($_GET['editando'])) {
 	$editando = $_GET['editando'];
 }
 else{
 	$editando = "no";
 }

 if (isset($_GET['articulo'])) {
 	$articulo = $_GET['articulo'];
 }
 else{
 	$articulo = "no";
 }

if(isset($_GET['registronuevo'])){
	$registronuevo = $_GET['registronuevo'];
}else{
	$registronuevo = "no";
}

 if(isset($_SESSION['login'])){}else{$_SESSION['login'] = "no";}
 ?>
<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
	    <title>Weblog de Angela Barbosa</title>
        <meta name="description" content="Weblog de Angela Barbosa"/>
        <meta name="Keywords" content="Weblog, blog, Angela Barbosa, Diseño, Multimedia"/>
        <meta http-equiv="refresh" content="500"/>
        <link rel=stylesheet href="css/estilo.css" type="text/css"/>
        </head>
<body>
    <div id="cajaheader"></div>
	<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/person"></div>
    <header>
           <div id="logo">
           <div id="tipo">
           	<h1><span itemprop="name"><?php  echo $_SESSION['nombre']." ".$_SESSION['apellidouno'] ?></span></h1>
           	<h2><span itemprop="title"><?php $_SESSION['titulo']?></span></h2>
    </div>
    <nav>
    	<ul>
    	   <li><a href="index.php?registronuevo=yes"><camvaas id="iconoinicio" width="50" height="50"></camvaas><br/>Crea tu propio blog</a></li>
        </ul>
        <?php 
        if($_SESSION['login'] == "yes"){
        	echo "<a href='includes/unlog.php'> Pulsa a qui para cerrar session </a>";
        }
        	else{ echo '
  <div id="login"><form action="includes/login.php" method="post">
          <input type"text" name"usuario" value="usuario">	
               <input type"text" name"contrasena" value="contrasena">
                  <input type="submit">
        </form>
        </div>';}
        ?>
        </nav>
      </header> 
         <div id="contenido">
          <section id="sobremi">
          <span itemprop="photo"> <div id="mifoto" style="background:url('photo/<?php $_SESSION['foto']?>.jpg');"></div><!--<img src="photo/angelabarbosa.jpg" width=50px height=50px/>--></span>	
                <h6><?php $_SESSION['description']?><span itemprop="url"><br/><a href="<?php $_SESSION['webpersonal']?>"><?php $_SESSION['webpersonal']?></a></span></h6>

          </section>	
           <aside id="contacto">
              <h3>Contacto</h3> 
              <form action="php/enviamail.php" method="post"><p>Introduce tu nombre</p>
               <input type="text" required name="nombre"/>
               <p>Introduce tu email</p>
               <input type="email" value="ejemplo:usuario@dominio.com" name="email"/>
               <p>Escribe tu mensaje</p>
               <textarea row = 6 name="mensaje"></textarea>
               <input type="submit" value="enviar">
              </form> 
             </aside>
             <?php if($registronuevo == "no"){}else{include "includes/registronuevo.php";}?>
             <?php
           if($registronuevo == "no"){}else{if($articulo == "no"){if($editando == "no"){include "includes/crearnuevopost.php";}else{}}else{}}else{}?>
             pon aqui el aside
            <section>
            <?php
           if($registronuevo == "no"){ if($_SESSION['login'] == "yes"){
             if($articulo == "no"){if ($editando == "no") {include "includes/crearnuevopost.php";}else{}}else{}}else{}}else{}?>
                       
            	Aqui van los post
            <?php    if($registronuevo == "no"){if($articulo == "no"){if($editando == "no"){include "includes/posts.php";} else{}}else{}}else{}?>

            	<?php    if($registronuevo == "no"){ if($articulo == "no"){if($editando == "yes"){include "includes/formactualizar.php";} else{}}else{}}else{}?>

            	<?php    if($registronuevo == "no"){ if($articulo == "yes"){include "includes/articulo.php";} else{}}else{}?>
           
                
            </section>

         </div> 	   

         <footer>
           <h6>
              <div class="vcard">
              <div><span class="name">Angela Barbosa</span>-<span class="locality">Mislata</span>
              <span class="region">Valencia</span>
              <span class="postal-code">46920</span>
              <span class="country-name">España</span>
              </div>
              <div><span class="tel">96 000 00 00</span>
              <span class="email">info@jocarsa.com</span></div></div>

           </h6>
           <script type="text/javascript">
                  if (localStorage.pagecount) {
                  	localStorage.pegacount = Number(localStorage.pagecount)+1;
                  }
                  else{
                  	localStorage.pagecount= 1;
                  }
                  document.write("En esta sesion, has visiatdo mi pagina:"+sessionStorage.pagecount+"veces");
            </script>
            <script type="text/javascript">
            if (sessionStorage.pagecount) {
            	sessionStorage.pagecount=Number(sessionStorage.pagecount)+1;
            }
             else{
             	sessionStorage.pagecount = 1;
             }
             document.write("En esta sesion, has visitado mi pagina:"+sessionStorage.pagecount+"veces");
            </script>
        </nav>
       </footer>
     </div>
    </body>
</html>