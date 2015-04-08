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
			  <link rel="stylesheet" href="css/smoothness/jquery-ui-1.9.2.custom.min.css" type="text/css"	/>
			  <script type="text/javascript" src="scripts/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"></script>
			  <script type="text/javascript" src="scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js"></script>
			  <script type="text/javascript">
			  	$("document").ready(function(){
			  		$("#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
			  		$("#registro").submit(function(event){
			  			var folio = $("#folio").val();
			  			var fecha = $("#datepicker").val();
			  			var monto = $("#monto").val();
			  			if(folio && fecha && monto != ""){
			  				return;
			  			}
			  			else{
			  				event.preventDefault();
			  				alert("Error");
			  			}
			  		});
			  	});
			  	
			  </script>
			</head>
			<body>
				<h1>Registro de folios para el cliente: <?echo $_SESSION['cliente']?></h1>
				<div id="registro">
					<form id="fFolio" action="registrarFolio.php" method="get">
						<label for="folio">Folio:</label><input id="folio" name="folio" type="text" maxlength="10"></br></br>
						<label for="fecha">Fecha de pago:</label><input name="fecha" id="datepicker" type="text"  /></br></br>
						<label for="monto">Monto:</label><input id="monto" name="monto" type="text" size="6" id="txtMonto" />
						<input id="ingresar"type="submit" value="Ingresar PP" name="ingresar_pp"/>
					</form>
				</div>
			</body>
		</html>
	<?}

?>