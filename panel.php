<?php
//conectar a la BDD
include("conexion.php");

//consultar por el ultimo estado
$query = "SELECT Cadena FROM transacciones ORDER BY Fecha desc, Hora desc";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($row = mysql_fetch_row($result)){
	$cadena = $row[0];
	break;
	}


for($i=4; $i<12; $i++){
	echo $cadena[$i];
}
?>