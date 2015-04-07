<?php

include("conexion.php");

$query = "INSERT INTO transacciones (RUT,Central,Codigo,Fecha,Hora,Usuario,IPpanel,Puerto,Cadena,Estado) VALUES ('16656476k','10','1','12-1-2015','14:10:00','Rodrigo','123.123.123.123','8080','*cadena','T')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>