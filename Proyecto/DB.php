<?php
// Connecting, selecting database
$db_name = "Proyecto";
$db_server = "localhost";
$db_user = "root";
$db_pass = "mysql";
$conn=mysql_connect($db_server,$db_user,$db_pass) or die('Could not connect: ' . mysql_error());
mysql_select_db($db_name,$conn) or die("La base no existe");
?>