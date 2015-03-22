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
			  <link rel="stylesheet" href="css/smoothness/jquery-ui-1.9.2.custom.min.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
			  <script type="text/javascript" src="scripts/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"></script>
			  <script type="text/javascript" src="scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js"></script>
			  <script type="text/javascript">
			  	$("document").ready(function(){
			  		$("#datepicker").datepicker().formatDate("yy-mm-dd");
			  	});
			  	
			  </script>
			</head>
			<body>
				<h1>Registro de folios para el cliente: <?echo $_SESSION['cliente']?></h1>
				<div id="registro">
					<form id="fFolio" action="registrarFolio.php">
						<label for="folio">Folio:</label><input name="folio" type="text" maxlength="10"></br></br>
						<label for="fecha">Fecha de pago:</label><input id="datepicker" type="text"  /></br></br>
						<label for="monto">Monto:</label><input name="monto" type="text" size="6" id="txtMonto" />
						<input type="submit" value="Ingresar PP" name="ingresar_pp"/>
					</form>
				</div>
			</body>
		</html>
	<?}

?>