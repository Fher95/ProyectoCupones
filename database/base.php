<?php
$enlace = mysqli('localhost', 'usuario_mysql', 'contraseña_mysql');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

$sql = 'CREATE DATABASE BDCupones';
if (mysql_query($sql, $enlace)) {
    echo "La base de datos mi_bd se creó correctamente\n";
} else {
    echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
}
?>