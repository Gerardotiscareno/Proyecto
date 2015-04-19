<?php

require('DB.php');
class Codigo{

    private $ID;
    private $Titulo;
	private $Fecha;
    private $Autor;
    private $Correo;
    private $Codigo;
    private $Id_Len;
	private $Id_C;
	private $Subscriptor;
	private $Ecorreo;

    public function listarc(){

        $sql1="Select c.ID as ID,c.Titulo, c.Fecha, c.Autor, c.Correo, l.Nombre as Lenguaje, 'Enviar' enviar, c.Codigo Codigo from Codigo c, Lenguaje l where l.ID = c.id_lenguaje";
        $result=mysql_query($sql1) or die ("Error en consulta".mysql_error());

        echo "<div class=table-bordered>";
        echo"<table border='0' class=\"table table-striped\">";
        echo"<tr><td colspan=16 align=center><h4><font color='#086A87'>LISTA DE CODIGO</font></h4></td></tr>";
        echo"<tr>
        <td><b><center>ID</center></td>
        <td><b>Titulo</td>
		<td><b>Fecha</td>
        <td><b>Autor</td>
        <td><b>Correo</td>
        <td><b>Lenguaje</td>
		<td colspan='2' align=center rowspan='1'><center><b>Opciones</td>";


        while($field=mysql_fetch_array($result)){

            $this->ID =utf8_decode($field['ID']);
            $this->Titulo=utf8_decode($field['Titulo']);
			$this->Fecha=utf8_decode($field['Fecha']);
            $this->Autor=utf8_decode($field['Autor']);
            $this->Correo=utf8_decode($field['Correo']);
            $this->Lenguaje=utf8_decode($field['Lenguaje']);

            echo"<tr><td><center>$this->ID</center></td>";
            echo"<td>$this->Titulo</td>";
			echo"<td>$this->Fecha</td>";
            echo"<td>$this->Autor</td>";
            echo"<td>$this->Correo</td>";
            echo"<td>$this->Lenguaje</td>";
			echo"<td><center><a href=\"Codigo.php?id=$this->ID\"><button type='button' class='btn btn-xs btn-info'>Detalle</button></a></td>";
            echo"<td><center><a href=\"Enviar.php?id=$this->ID\"><button type='button' class='btn btn-xs btn-success'>Enviar</button></a></td></tr>";
			//echo"<td><center><a href=\"Enviar.php?id=$this->ID\"><button type='button' class='btn btn-xs btn-danger'>Borrar</button></a></td></tr>";
        }
        echo"</table></div>";
    }
	
	public function enviarc(){
	    $sql1="SELECT c.ID, c.Titulo,c.Fecha, c.Autor, c.Correo as ccorreo, l.Nombre as Lenguaje,e.Subscriptor,e.Correo as ecorreo FROM Codigo c, Lenguaje l, Enviado e WHERE l.ID = c.id_lenguaje AND c.ID = e.ID_Codigo; ";
        $result=mysql_query($sql1) or die ("Error en consulta".mysql_error());

        echo "<div class=table-bordered>";
        echo"<table border='0' class=\"table table-striped\">";
        echo"<tr><td colspan=16 align=center><h4><font color='#086A87'>LISTA DE CODIGO ENVIADO</font></h4></td></tr>";
        echo"<tr>
        <td><b><center>ID</center></td>
		<td><b>Titulo</td>
        <td><b>Fecha</td>
        <td><b>Autor</td>
        <td><b>Correo</td>
        <td><b>Lenguaje</td>
		<td><b>Subscriptor</td>
        <td><b>Correo</td>
		<td colspan='3' align=center rowspan='1'><center><b>Opciones</td>
        </tr>";

        while($field=mysql_fetch_array($result)){

            $this->ID =utf8_decode($field['ID']);
			$this->Titulo=utf8_decode($field['Titulo']);
            $this->Fecha=utf8_decode($field['Fecha']);
            $this->Autor=utf8_decode($field['Autor']);
            $this->Correo=utf8_decode($field['ccorreo']);
            $this->Lenguaje=utf8_decode($field['Lenguaje']);
			$this->Subscriptor=utf8_decode($field['Subscriptor']);
			$this->Ecorreo=utf8_decode($field['ecorreo']);
            
            echo"<tr><td><center>$this->ID</center></td>";
            echo"<td>$this->Titulo</td>";
			echo"<td>$this->Fecha</td>";
            echo"<td>$this->Autor</td>";
            echo"<td>$this->Correo</td>";
            echo"<td>$this->Lenguaje</td>";
            echo"<td>$this->Subscriptor</td>";
            echo"<td>$this->Ecorreo</td>";
			echo"<td><center><a href=\"Codigo.php?id=$this->ID\"><button type='button' class='btn btn-xs btn-info'>Detalle</button></a></td>";
            echo"<td><center><a href=\"Enviar.php?id=$this->ID\"><button type='button' class='btn btn-xs btn-success'>Enviar</button></a></td></tr>";
        }
        echo"</table></div>";
	}
	
    public function crearenvio($Id_C,$ECorreo,$Subscriptor){
    $insert="INSERT INTO Enviado(ID_Codigo,Fecha,Correo,Subscriptor)VALUES('$Id_C',NOW(),'$ECorreo','$Subscriptor')";
    $exec=mysql_query($insert) or die ('Error al insertar Envio en la base de datos'.mysql_error());
    }
	
    public function crearcodigo($Id_Len,$Titulo,$Autor,$Correo,$Codigo){
    $insert="INSERT INTO Codigo(id_lenguaje,Titulo,fecha,autor,correo,codigo)VALUES('$Id_Len','$Titulo',NOW(),'$Autor','$Correo','$Codigo')";
    $exec=mysql_query($insert) or die ('Error al insertar codigo en la base de datos'.mysql_error());
    }

}
?>