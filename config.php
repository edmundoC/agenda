<?php
    $conexion = mysql_connect("localhost","root","") or die("Error al crear la conexión con la BD: ".mysql_error());
	$db = mysql_select_db("agenda",$conexion) or die("Error al seleccionar la BD: ".mysql_error());
?>