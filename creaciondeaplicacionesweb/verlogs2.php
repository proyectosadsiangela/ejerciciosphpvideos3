<?php
session_start();

$codigo = $_SESSION['permisos'];
if($codigo == 1){
echo "Tu usuario es:".$_SESSION['usuario']."<br>"."Tu contrasena es:".$_SESSION['contrasena'];

//Crear resumen de visiatas
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');
//Establecer una consulta
$consulta = "SELECT * FROM logs ";
//Ejecutar la consulta
$resultado=$conexion->query($consulta);

$hora0=0; $hora1=0;
$hora2=0; $hora3=0;
$hora4=0; $hora5=0;
$hora6=0; $hora7=0;
$hora8=0; $hora9=0;
$hora10=0; $hora11=0;
$hora12=0; $hora13=0;
$hora14=0; $hora15=0;
$hora16=0; $hora17=0;
$hora18=0; $hora19=0;
$hora20=0; $hora21=0;
$hora22=0; $hora23=0;
$hora24=0; 

foreach ($resultado as $fila){  

if ($fila['hora'] == 0) {
   	$hora0++;
   } 
if ($fila['hora'] == 1) {
   	$hora1++;
   }   if ($fila['hora'] == 2) {
   	$hora2++;
   }   if ($fila['hora'] == 3) {
   	$hora3++;
   }   if ($fila['hora'] == 4) {
   	$hora4++;
   }   if ($fila['hora'] == 5) {
   	$hora5++;
   }   if ($fila['hora'] == 6) {
   	$hora6++;
   }   if ($fila['hora'] == 7) {
   	$hora7++;
   }   if ($fila['hora'] == 8) {
   	$hora8++;
   }   if ($fila['hora'] == 9) {
   	$hora9++;
   }   if ($fila['hora'] == 10) {
   	$hora10++;
   }   if ($fila['hora'] == 11) {
   	$hora11++;
   }   if ($fila['hora'] == 12) {
   	$hora12++;
   }   if ($fila['hora'] == 13) {
   	$hora13++;
   }   if ($fila['hora'] == 14) {
   	$hora14++;
   }   if ($fila['hora'] == 15) {
   	$hora15++;
   }   if ($fila['hora'] == 16) {
   	$hora16++;
   }   if ($fila['hora'] == 17) {
   	$hora17++;
   }   if ($fila['hora'] == 18) {
   	$hora18++;
   }   if ($fila['hora'] == 19) {
   	$hora19++;
   }   if ($fila['hora'] == 20) {
   	$hora20++;
   }   if ($fila['hora'] == 21) {
   	$hora21++;
   }   if ($fila['hora'] == 22) {
   	$hora22++;
   }   if ($fila['hora'] == 23) {
   	$hora24++;
   }   if ($fila['hora'] == 24) {
   	$hora0++;
   }   
}
/*
echo "Visiatas en la hora 0:".$hora0."<br/>";
echo "Visiatas en la hora 1:".$hora1."<br/>";
echo "Visiatas en la hora 2:".$hora2."<br/>";
echo "Visiatas en la hora 3:".$hora3."<br/>";
echo "Visiatas en la hora 4:".$hora4."<br/>";
echo "Visiatas en la hora 5:".$hora5."<br/>";
echo "Visiatas en la hora 6:".$hora6."<br/>";
echo "Visiatas en la hora 7:".$hora7."<br/>";
echo "Visiatas en la hora 8:".$hora8."<br/>";
echo "Visiatas en la hora 9:".$hora9."<br/>";
echo "Visiatas en la hora 10:".$hora10."<br/>";
echo "Visiatas en la hora 11:".$hora11."<br/>";
echo "Visiatas en la hora 12:".$hora12."<br/>";
echo "Visiatas en la hora 13:".$hora13."<br/>";
echo "Visiatas en la hora 15:".$hora15."<br/>";
echo "Visiatas en la hora 16:".$hora16."<br/>";
echo "Visiatas en la hora 17:".$hora17."<br/>";
echo "Visiatas en la hora 18:".$hora18."<br/>";
echo "Visiatas en la hora 19:".$hora19."<br/>";
echo "Visiatas en la hora 20:".$hora20."<br/>";
echo "Visiatas en la hora 21:".$hora21."<br/>";
echo "Visiatas en la hora 22:".$hora22."<br/>";
echo "Visiatas en la hora 23:".$hora23."<br/>";
echo "Visiatas en la hora 24:".$hora24."<br/>";
*/
$anchura = "20";
$multiplicador = "5";
$desfase = "1";
echo '
</br>Visiatas durante el dia de hoy:
  <table border=1 valign="bottom">
      <tr valign="bottom">
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
         <td><img src="square.png" width='.$anchura.' heigth='.($multiplicador*($hora0+$desfase)).'></td>
        </tr>
             <td>0</td>
             <td>1</td>
             <td>2</td>
             <td>3</td>
             <td>4</td>
             <td>5</td>
             <td>6</td>
             <td>7</td>
             <td>8</td>
             <td>9</td>
             <td>10</td>
             <td>11</td>
             <td>12</td>
             <td>13</td>
             <td>14</td>
             <td>15</td>
             <td>16</td>
             <td>17</td>
             <td>18</td>
             <td>19</td>
             <td>20</td>
             <td>21</td>
             <td>22</td>
             <td>23</td>
             <td>24</td>
        </tr>
  </table>
';

$conexion = Null; 

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
//Crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite') or die('Ha sido imposible establecer la conexion');

//Establecer una consulta
$consulta = "SELECT * FROM logs ";
//Ejecutar la consulta
$resultado=$conexion->query($consulta);
//Imprimir la consulta
echo "
<table border=1 width=100%>
<tr>
<td>Marca de tiempo</td>
<td>Año </td>
<td>Mes </td>
<td>Dia </td>
<td>Hora </td>
<td>Minuto</td>
<td>Segundos</td>
<td>ip</td>
<td>Navegador</td>
<td>Usuario</td>
<td>Contrasena</td>
</tr>
";
var_dump($resultado);
foreach ($resultado as $fila){     

	echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundos']."</td><td>".$fila['ip']."</td><td>".$fila['navegador']."</td><td>".$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>";
}
echo "</table>";
//cerrar conexion
$conexion=null;

}else {
    echo "Tu no eres administrador";
}
?>