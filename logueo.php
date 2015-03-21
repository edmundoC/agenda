<?php
	include "config.php";
	session_start();
	if(isset($_POST['enviar'])){
		$usuario = $_POST['user'];
		$pass  = $_POST['pass'];
		$query = "SELECT * FROM usuarios WHERE nick = '".mysql_real_escape_string($usuario)."' AND pass ='".mysql_real_escape_string($pass)."'";
		$result = mysql_query($query) or die("Error: ".mysql_error());
		$count = mysql_num_rows($result);
		
		if($count == 1){
			$_SESSION['usuario'] = $usuario;
			$datos = mysql_fetch_array($result);
			$_SESSION['id_usuario'] = $datos['id_usuario'];
			header("Location: index.php");
		}else{
			echo "Nombre o usuario incorrectos, vuelve a intentarlo";
			header("Refresh: 2; login.php");
		}
	}
?>