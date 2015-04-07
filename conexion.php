<?php

$link =mysql_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
mysql_select_db("ckdevelompent",$link) OR DIE ('No se pudo seleccionar la base de datos');

?>
