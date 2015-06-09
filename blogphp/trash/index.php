<?php session_start();

include "includes/variablesusuario.php";
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
    	   <li><a href="index.html?log=new"><camvaas id="iconoinicio" width="50" height="50"></camvaas><br/>Crea tu propio blog</a></li>
        </ul>
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
             <aside id="post">
             <h5>posts previos</h5>
                 <ul>
                    <li><a href=""><time>2011-01-01</time>/Feliz año nuevo</li>
                    <li><a href=""><time>/Visita a Video2Brain</a></li>
                    <li><a href=""><time>2010-11-05</time>/Fotos de otoño</a></li>
                    <li><a href=""><time>2011-08-12</time>/Vacaciones de verano</a></li>
                    <li><a href=""><time>2011-01-01</time>/Feliz año nuevo</a></li>
                    <li><a href=""><time>2010-12-05</time>/Visiata a Video2Brain</a></li>
                    <li><a href=""><time>2010-11-05</time>/Fotos de otoño</a></li>
                    <li><a href=""><time>2011-01-01</time>/Feliz año nuevo</a></li>
                    <li><a href=""><time>2010-12-05</time>/Visita a Video2Brain</a></li>
                    <li><a href=""><time>2010-11-05</time>/Fotos de otoño</a></li>
                 </ul>
            </aside>
            <section>
            	Aqui val los post
            	<?php include "includes/posts.php"?>
            </section>

         </div> 	   


    </nav>

</body>





</html>