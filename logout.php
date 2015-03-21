<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		echo "Sesión terminada";			
		session_destroy();
		header("Location: login.php");
	}
?>