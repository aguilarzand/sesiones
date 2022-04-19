<?php
//Conexion al manejador y base de datos
$con = pg_connect("dbname=sesiondb user=user_sesion password=hola123 port=5432") or die (pg_last_error());
?>
