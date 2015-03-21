<?php
	session_start();
	include "config.php";
	if(!isset($_SESSION['usuario'])){
		echo "Debes estar logueado";
		header("Refresh: 2; login.php");
	}
	else{
		?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
			"http://www.w3.org/TR/html4/loose.dtd">
		<html>
			<head>
			  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
			  <title>Registro de folios</title>
			  <script type="text/javascript" src="scripts/jquery-2.1.3.min.js"></script>
			  <script type="text/javascript">
			  	$("document").ready(function(){
			  		
			  	});
			  </script>
			</head>
			<body>
				<h1>Registro de folios para el cliente: <?echo $_SESSION['usuario']?></h1>
				<div id="registro">
					<form id="fFolio" action="registrarFolio.php">
						<label></label>
					</form>
				</div>
			</body>
		</html>
	<?}

?>