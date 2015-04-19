<?php
	require('fncodigo.php');
	require('header.php'); 
	require('DB.php');
	$codigol=new Codigo();
	
	if(isset($_POST['submit'])){
		switch($_POST['submit']){
			case "Enviar":
				echo "<div class=\"alert alert-success\" role='alert'>";
				echo "<br><h4> <center>Exito,el Codigo se ha enviado correctamente</h3>";
				echo"</div>";
				//$codigol->crearenvio("$_POST[ID]","$_POST[SCorreo]","$_POST[Nombre]");

				/*$file = 'something.txt';
				$content = "some text here";
				$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/'. $file,"wb");
				fwrite($fp,$content);
				fclose($fp);*/
				
				$sql1="Select c.ID, c.Titulo, c.Autor, c.Correo, Codigo  from Codigo c where c.ID=".$_POST["ID"] ;
				$result=mysql_query($sql1) or die ("Error en consulta ".mysql_error());
				while($field=mysql_fetch_array($result)){
					$subject = $field['Titulo'];
					$message = nl2br($field['Codigo']);
				}
				$to      = $_POST[SCorreo];
				$headers = 'From: Gerardo.tiscareno@gmail.com' . "\r\n" .
					'Reply-To: Gerardo.tiscareno@gmail.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				
				//unlink($_SERVER['DOCUMENT_ROOT'].'/'. $file);
				
				header('Refresh: 3;url=Listaenv.php');
				break;
		}} else {
				$sql1="Select c.ID as ID,c.Titulo, c.Fecha, c.Autor, c.Correo, l.Nombre as Lenguaje, Codigo  codigo from Codigo c, Lenguaje l where l.ID = c.id_lenguaje and c.id=". htmlspecialchars($_GET["id"]) ;
				$result=mysql_query($sql1) or die ("Error en consulta".mysql_error());
				while($field=mysql_fetch_array($result)){
					echo "<div class=table-bordered>";
					echo"<table border='0' class=\"table table-striped\">";
					echo"<tr><td colspan=6 align=center><h4><font color='#086A87'>Enviar Codigo</font></h4></td></tr>";
					echo"<tr><td><b>Titulo</td><td>".$field['Titulo']."</td></td>
						 <tr><td><b>Fecha</td><td>".$field['Fecha']."</td></td>
						 <tr><td><b>Autor</td><td>".$field['Autor']."</td></tr>
						 <tr><td><b>Correo</td><td>".$field['Correo']."</td></tr>
						 <tr><td><b>Lenguaje</td><td>".$field['Lenguaje']."</td></tr>
						 <tr><td colspan='2' align=center rowspan='1'><b>Codigo<br></td></tr>
						 <tr><td colspan='2' align=left rowspan='1'>".nl2br($field['codigo'])."<br></td></tr>";
				}
				
				echo"</div><form name='codigol' action='Enviar.php' method='POST' class='form' id='form'>";
				echo"<table border='0' class=\"table table-striped\">";
				echo"<tbody>";
				echo"<tr><td style='text-align: Rigth; vertical-align: top; width: 165px; height: 10px;'><span style='font-weight: bold;'>Nombre<br></td>";
				echo"<td style='vertical-align: top; width: 309px; height: 10px;'><input name='Nombre' type='text' class='form-control'></td></tr>";
				echo"<tr><td style='text-align: Rigth;vertical-align: top; width: 165px; height: 10px;'><span style='font-weight: bold;'>Correo<br></td>";
				echo"<td style='vertical-align: top; width: 309px; height: 10px;'><input name='SCorreo' type='text' class='form-control'></td></tr>";
				echo"</tbody>";
				echo"<input type='hidden' name='ID' value='".$_GET["id"]."'>";
				//echo"<input type='hidden' name='Titulo' value='".$field['Titulo']."'>";
				//echo"<input type='hidden' name='codigo' value='".($field['codigo'])."'>";
				echo"</table>";
				echo"<div style='text-align: center;'>";
				echo"<input value='Enviar' name='submit' type='submit' class='btn btn-success'></div>";		
		
		
	}
	require('footer.php');
?>