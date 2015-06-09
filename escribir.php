<?php
$archivo="text.txt";
$contenido = "Este es mi contenido";

$manejador = fopen($archivo,'a+');
fwrite($manejador, $contenido);

?>