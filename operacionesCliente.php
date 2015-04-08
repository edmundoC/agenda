<?php
	session_start();
	include "config.php";
	if(isset($_POST['registrar'])){
		$usuario = $_SESSION['id_usuario'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$estado = $_POST['estado'];
		$query = "INSERT INTO clientes (id_usuario, nombre, apellidos, id_estado) VALUES ('".$usuario."','".$nombre."','".$apellidos."','".$estado."')";
		$insertar = mysql_query($query) or die("Error al insertar la fila ". mysql_error());
		if($insertar){
			echo "Registro exitoso";
			header("Refresh: 2, index.php");
		}
			
		
	}
?>
