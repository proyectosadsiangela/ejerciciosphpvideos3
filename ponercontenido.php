<?php

$conexion = new PDO('sqlite:bibliotecacd.sqlite') or die('Ha sido imposible establecer la conexion');


$consulta ="

INSERT INTO discos VALUES('Queeen','Queen',1973);
INSERT INTO discos VALUES('Queeen','QueenII',1974);
INSERT INTO discos VALUES('Queeen','Sheer Heart Attack',1974);
INSERT INTO discos VALUES('Queeen','A Night At The Opera',1975);

INSERT INTO discos VALUES('U2','Boy',1980);
INSERT INTO discos VALUES('U2','October',1981);
INSERT INTO discos VALUES('U2','War',1983);
INSERT INTO discos VALUES('U2','Under a Blood Red Sky',1983)";


$conexion=$conexion->exec($consulta);


?>