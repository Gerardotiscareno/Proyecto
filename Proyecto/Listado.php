<?php
require('fncodigo.php');
require('header.php'); 
$codigo=new Codigo();
//echo"<h1><center><font color='#186A87' face=''><br>Listado Codigo</h1>";
echo "<table style='border: solid 1px black; 'text-align: Center' align='center'></table>";
$codigo->listarc();
require('footer.php');
?>