<?php
	require('fncodigo.php');
	require('header.php');
	require('DB.php');
	$codigol=new Codigo();


	 if(isset($_POST['submit'])){
		switch($_POST['submit']){
			case "Enviar":
				echo "<div class=\"alert alert-success\" role='alert'>";
				echo "<br><h4> <center>Exito,el Codigo se ha insertado correctamente</h3>";
				echo"</div>";
				$codigol->crearcodigo("$_POST[Lenguaje]","$_POST[Titulo]","$_POST[Autor]","$_POST[Correo]","$_POST[Codigo]");
				header('Refresh: 3;url=Listado.php');
				break;
		}
	}

	echo "<html>
		<head>
		<meta content='text/html; charset=ISO-8859-1'
		http-equiv='content-type'>
		<title>Enviar Codigo</title>
		</head>
		<body bgcolor='#E6E6FA'>
		<h1><center><font color='#186A87' ><br>Agregar Codigo</h1>
		<form name='codigol' action='Index.php' method='POST' class='form' id='form'>
		<table style='text-align: left; width: 494px; height: 406px;'align='center' border='0' cellpadding='2' cellspacing='2' class=\"table table-striped\">
		<tbody>	<tr>
		<td style='text-align: left; vertical-align: top; width: 165px; height: 30px;'><span style='font-weight: bold;'>Titulo<br></td>
		<td style='vertical-align: top; width: 309px; height: 30px;'><input name='Titulo' type='text' class='form-control'></td></tr>
		<td style='text-align: left; vertical-align: top; width: 165px; height: 30px;'><span style='font-weight: bold;'>Autor<br></td>
		<td style='vertical-align: top; width: 309px; height: 30px;'><input name='Autor' type='text' class='form-control'></td></tr>
		<tr><td style='text-align: left;vertical-align: top; width: 165px; height: 30px;'><span style='font-weight: bold;'>Correo<br></td>
		<td style='vertical-align: top; width: 309px; height: 30px;'><input name='Correo' type='text' class='form-control'></td></tr>
		<tr><td style='text-align: left;vertical-align: top; width: 165px; height: 30px;'><span style='font-weight: bold;'>lenguaje<br>	</td>";
		$result = mysql_query("SELECT * FROM Lenguaje"); 
		echo "<td style='vertical-align: top; width: 309px; height: 30px;'><select class='form-control id='Lenguaje' name='Lenguaje'>"; 
		while($row = mysql_fetch_assoc($result)) 
		{ 
			echo "<option value = ".$row[ID].">".$row[Nombre]."</option>"; 
		}
		echo "</select></td>"; 

	echo "</tr><tr><td style='text-align: left;vertical-align: top; width: 165px; height: 312px;'><span style='font-weight: bold;'>Codigo<br></td>
			<td style='vertical-align: top; width: 309px; height: 312px;'>
			<TEXTAREA style='height: 300px;' class='form-control' NAME='Codigo' ROWS='3' COLS='550' WRAP='VIRTUAL'> Inserte codigo aqui</TEXTAREA></td>
			</tr>
			</tbody>
			</table><br>
			<div style='text-align: center;'>
			<input value='Enviar' name='submit' type='submit' class='btn btn-success'></div>
			</form><br><br>
			</body>
			</html>";
	require('footer.php');
?>