<?php
error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Obtener el puerto para el servicio WWW. */
$service_port = 2000;

/* Obtener la dirección IP para el host objetivo. */
$address = '190.44.168.102';

/* Crear un socket TCP/IP. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() falló: razón: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Intentando conectar a '$address' en el puerto '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() falló.\nRazón: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}

$in = "Ojala funcione esta wea";
$out = '';

echo "Enviando petición HTTP HEAD ...";
$in = utf8_encode($in);

socket_write($socket, $in, strlen($in));
echo "OK.\n";

echo "Leyendo respuesta:\n\n";

while ($out = socket_read($socket, 2048)) 
{
	echo $out;
	echo "\n";
}

echo "Cerrando socket...";
socket_close($socket);
echo "OK.\n\n";
?>