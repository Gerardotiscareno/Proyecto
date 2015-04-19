<?php
	require('header.php'); 
	require('DB.php');

	echo" ";
	$sql1="Select c.ID as ID,c.Titulo, c.Fecha, c.Autor, c.Correo, l.Nombre as Lenguaje, Codigo  codigo from Codigo c, Lenguaje l where l.ID = c.id_lenguaje and c.id=". htmlspecialchars($_GET["id"]) ;
	$result=mysql_query($sql1) or die ("Error en consulta".mysql_error());
	while($field=mysql_fetch_array($result)){
		echo "<div class=table-bordered>";
		echo"<table border='0' class=\"table table-striped\">";
		echo"<tr><td colspan=6 align=center><h4><font color='#086A87'>Detalle Codigo</font></h4></td></tr>";
		echo"<tr><td><b>Titulo</td><td>".$field['Titulo']."</td></td>
			 <tr><td><b>Fecha</td><td>".$field['Fecha']."</td></td>
			 <tr><td><b>Autor</td><td>".$field['Autor']."</td></tr>
			 <tr><td><b>Correo</td><td>".$field['Correo']."</td></tr>
			 <tr><td><b>Lenguaje</td><td>".$field['Lenguaje']."</td></tr>
			 <tr><td colspan='2' align=center rowspan='1'><b>Codigo<br></td></tr>
			 <tr><td colspan='2' align=left rowspan='1'>".nl2br($field['codigo'])."<br></td></tr>
			 </table>";
	}
	
	echo"</div><div><td><center><a href=\"Enviar.php?id=".$_GET["id"]."\"><span style='font-weight: bold; color: blue;'><button type='button' class='btn btn-xs btn-info'>Enviar</button></a></td></div>";
	require('footer.php');
?>